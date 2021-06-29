<?php
declare(strict_types=1);

namespace Tests\Unit\Providers\ParserService;

use App\Providers\ParserService\ParserHtmlService;
use App\Providers\ParserService\ParserMainService;
use DOMDocument;
use DOMElement;
use PHPUnit\Framework\TestCase;
use Tests\Unit\Models\MotherObject\StringProvider;
use Tests\Unit\Models\MotherObject\StringsHtmlProvider;
use function var_dump;

/**
 * Class ParserHtmlServiceTest
 * @author BogusŁaw Trojański
 */
class ParserHtmlServiceTest extends TestCase
{
    private ParserHtmlService $htmlService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->htmlService = new ParserHtmlService();
    }
    public function test_convert_array_to_string()
    {
        $parserMainService = new ParserMainService();
        $innerBody = StringsHtmlProvider::getBigInnerBody();
        $cleanData = $parserMainService->cleanHtmlStringsFromBadTags($innerBody);
        $cleanString = $this->htmlService->convertArrayToString($cleanData);

        $this->assertIsString($cleanString);
    }

    public function test_convert_string_to_domElement()
    {
        $innerString = StringProvider::getCleanString();
        $dom = $this->htmlService->convertStringToDom($innerString);

        self::assertInstanceOf(DOMDocument::class, $dom);
    }

}
