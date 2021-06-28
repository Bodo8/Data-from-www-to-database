<?php
declare(strict_types=1);

namespace App\Providers\ParserService;

use DOMDocument;
use function implode;
use function var_dump;

/**
 * Class ParserHtmlService
 * @author BogusŁaw Trojański
 */
class ParserHtmlService
{

    public function convertArrayToString(array $cleanHtmlArray): string
    {
        return implode("", $cleanHtmlArray);
    }

    public function convertStringToDom(string $innerString): DOMDocument
    {
        $dom = new DOMDocument('1.0', 'UTF-8');
        $dom->validateOnParse = true;
        $dom->preserveWhiteSpace = false;
        $dom->recover = true;
        $dom->loadHtml(htmlentities($innerString));
        $dom->saveHTML();

        return $dom;
    }
}
