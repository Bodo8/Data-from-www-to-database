<?php
declare(strict_types=1);

namespace Unit\Providers;

use App\Providers\ParserServiceProvider;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Class ParserServiceProviderTest
 * @author BogusŁaw Trojański
 */
class ParserServiceProviderTest extends TestCase
{
    private MockObject $parserServiceProvider;

    protected function setUp(): void
    {
        parent::setUp();
        $this->parserServiceProvider =
            $this->createMock(ParserServiceProvider::class);
    }

    public function test_parse_html_code()
    {
        $parserServiceProvider = $this->parserServiceProvider;
        $parserServiceProvider->expects($this->once())
            ->method('parseHtmlCode')
            ->with('abcde');

        $this->parserServiceProvider->parseHtmlCode('abcde');
    }
}
