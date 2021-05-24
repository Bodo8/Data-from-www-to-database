<?php
declare(strict_types=1);

namespace App\Providers;

use App\Providers\ParserService\ParserMainService;

/**
 * Class ParserServiceProvider
 * @author BogusŁaw Trojański
 */
class ParserServiceProvider
{
    private ParserMainService $parserMainService;

    public function __construct()
    {
        $this->parserMainService = new ParserMainService();
    }

    /**
     * @param string $innerBody
     */
    public function parseHtmlCode(string $innerBody): void
    {
        $cleanHtmlString = $this->parserMainService->cleanHtmlStringsFromBadTags($innerBody);

    }
}
