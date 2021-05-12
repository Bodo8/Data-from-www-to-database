<?php
declare(strict_types=1);

namespace App\Http\Controllers;

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

    /**
     *  constructor.
     */
    public function __construct(UrlServiceProvider $urlServiceProvider)
    {
        $this->urlServiceProvider = $urlServiceProvider;
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
        $dom->preserveWhiteSpace = false;
        $dom->recover = true;
        $dom->loadHtml(htmlspecialchars($result));

        return $dom;
    }
}
