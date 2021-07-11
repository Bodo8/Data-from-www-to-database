<?php
declare(strict_types=1);

namespace Unit\Provider\ParserService;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\Providers\ParserService\ParserServiceProvider;

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
