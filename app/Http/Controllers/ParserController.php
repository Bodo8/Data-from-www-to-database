<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Providers\ParserServiceProvider;
use App\Providers\UrlServiceProvider;
use DOMDocument;
use DOMNode;
use Exception;
use Illuminate\Routing\Controller as BaseController;
use function var_dump;

/**
 * Class ParserController
 * @author BogusŁaw Trojański
 */
class ParserController extends BaseController
{
    private const BODY_DOM_ELEMENT = 'body';

    private UrlServiceProvider $urlServiceProvider;
    private ParserServiceProvider $parserServiceProvider;

    /**
     *  constructor.
     */
    public function __construct(
        UrlServiceProvider $urlServiceProvider,
        ParserServiceProvider $parserServiceProvider
    )
    {
        $this->urlServiceProvider = $urlServiceProvider;
        $this->parserServiceProvider = $parserServiceProvider;
    }

    /**
     * Akcja pobierania kodu Html ze strony wwww.
     * @return DOMNode
     * @throws Exception
     */
    public function getData(): DOMNode
    {
        $url = $this->urlServiceProvider->getUrlFromConfig();

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_USERAGENT => '',
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CONNECTTIMEOUT => 30,
            CURLOPT_HEADER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS => 5,
            CURLOPT_URL => $url,
        ));
        $result = curl_exec($curl);
        curl_close($curl);

        if (is_bool($result)) {
            throw new Exception('wrong url or check network connection');
        }

        $dom = new DOMDocument('1.0', 'UTF-8');
        $dom->validateOnParse = true;
        $dom->preserveWhiteSpace = false;
        $dom->recover = true;
        $dom->loadHtml(htmlentities($result));
        $bodyHtml = $this->extractDomElementsBody($dom);
        $innerBodyString = $this->convertBodyToString($bodyHtml);
        $this->parserServiceProvider->parseHtmlCode($innerBodyString);

        return $bodyHtml;
    }

    /**
     * @param DOMDocument $dom
     * @return DOMNode
     * @throws Exception
     */
    private function extractDomElementsBody(DOMDocument $dom): DOMNode
    {
        $body = $dom->getElementsByTagName(self::BODY_DOM_ELEMENT);
        $items = $body->item(0);
        $children = $items->childNodes;
        $innerBodyString = $children->item(0);
        if ($innerBodyString == null) {
            throw new Exception('DomElement "body" no exist on the website' );
        }

        return $innerBodyString;
    }

    /**
     * @param DOMNode $bodyHtml
     * @return string
     * @throws Exception
     */
    private function convertBodyToString(DOMNode $bodyHtml): string
    {
        $innerBody = htmlspecialchars_decode($bodyHtml->C14N());

        if (strlen($innerBody) < 1) {
            throw new Exception('check DomElements on the website');
        }

        return $innerBody;
    }
}
