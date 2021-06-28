<?php
declare(strict_types=1);

namespace Tests\Unit\Providers\ParserService;

use App\Providers\ParserService\ParserMainService;
use App\Providers\ParserService\ParserStringService;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Tests\Unit\Models\MotherObject\StringsHtmlProvider;
use function count;
use function stripos;
use function var_dump;

/**
 * Class ParserMainServiceTest
 * @author BogusŁaw Trojański
 */
class ParserMainServiceTest extends TestCase
{

    public function test_clean_html_string()
    {
        $startNumber = 0;
        $wordToRemove = 'xd';
        $existedWord = 'div';
        $parserMainService = new ParserMainService();
        $innerBody = StringsHtmlProvider::getInnerBody();
        $cleanData = $parserMainService->cleanHtmlStringsFromBadTags($innerBody);

        $this->assertEquals(109, count($cleanData));
        $this->assertEquals(
            110, $this->searchOneBadWord($cleanData, $wordToRemove, $startNumber));
        $this->assertEquals(
            21, $this->searchOneBadWord($cleanData, $existedWord, $startNumber));
    }

    /**
     * @param array $cleanData
     * @param string $word
     * @param int $startNumber
     * @return int
     */
    private function searchOneBadWord(array $cleanData, string $word, int $startNumber): int
    {
        for ($i = ($startNumber + 1); $i < count($cleanData); $i++) {

            if (stripos($cleanData[$i], $word) !== false) {
                return $number = $i;
            }
        }

        return (count($cleanData) + 1);
    }
}
