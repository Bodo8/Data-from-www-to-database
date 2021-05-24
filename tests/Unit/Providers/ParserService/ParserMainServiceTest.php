<?php
declare(strict_types=1);

namespace Tests\Unit\Providers\ParserService;

use App\Providers\ParserService\ParserMainService;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Tests\Unit\Models\MotherObject\StringsHtmlProvider;

/**
 * Class ParserMainServiceTest
 * @author BogusŁaw Trojański
 */
class ParserMainServiceTest extends TestCase
{
    private MockObject $parserMainService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->parserMainService = $this->createMock(ParserMainService::class);
    }

    public function test_clean_html_string()
    {
        $parserMainService = new ParserMainService();
        $innerBody = StringsHtmlProvider::getInnerBody();

        $cleanData = $parserMainService->cleanHtmlStringsFromBadTags($innerBody);

        $this->assertEquals(109, count($cleanData));
    }
}
