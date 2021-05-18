<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Providers\ParserServiceProvider;
use App\Providers\UrlServiceProvider;
use DOMDocument;
use Exception;
use Illuminate\Routing\Controller as BaseController;

/**
 * Class ParserController
 * @author BogusŁaw Trojański
 */
class ParserController extends BaseController
{
    private UrlServiceProvider $urlServiceProvider;
    private ParserServiceProvider $ParserServiceProvider;

    /**
     *  constructor.
     */
    public function __construct(
        UrlServiceProvider $urlServiceProvider,
        ParserServiceProvider $ParserServiceProvider
    )
    {
        $this->urlServiceProvider = $urlServiceProvider;
        $this->ParserServiceProvider = $ParserServiceProvider;
    }

    /**
     * Akcja pobierania kodu Html ze strony wwww.
     * @return DOMDocument
     * @throws Exception
     */
    public function getData(): DOMDocument
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
        $this->saveToDataBase($dom);

        return $dom;
    }

    private function saveToDataBase(\DOMDocument $dom)
    {
        $body = $dom->getElementsByTagName('body');
        $innerBody = $this->extractDomElements($body);

    }


    private function getEmptyDomDocument(): DOMDocument
    {
        $dom = new DOMDocument('1.0', 'UTF-8');
        $dom->validateOnParse = true;
        $dom->preserveWhiteSpace = false;
        $dom->recover = true;

        return $dom;
    }

    /**
     * @param \DOMNodeList $body
     * @return string
     */
    private function extractDomElements(\DOMNodeList $body): string
    {
        $items = $body->item(0);
        $children = $items->childNodes;
        $bodyHtml = $children->item(0);

        return htmlspecialchars_decode($bodyHtml->C14N());
    }
}
