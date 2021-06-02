<?php
declare(strict_types=1);

namespace Tests\Unit\Providers\ParserService;

use App\Providers\ParserService\ParserStringService;
use PHPUnit\Framework\TestCase;
use Tests\Unit\Models\MotherObject\StringsHtmlProvider;
use function var_dump;

/**
 * Class ParserStringServiceTest
 * @author BogusŁaw Trojański
 */
class ParserStringServiceTest extends TestCase
{
    private ParserStringService $parserStringService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->parserStringService = new ParserStringService();
    }

    public function test_search_bad_tag_start()
    {
        $dives = StringsHtmlProvider::getBodiesFromBody();

        $tagToRemove = '<script>';
        $result = $this->parserStringService->searchBadTag($dives, $tagToRemove);

        $this->assertEquals(41, $result);
    }

    public function test_search_bad_tag_end()
    {
        $dives = StringsHtmlProvider::getBodiesFromBody();
        $tagToRemove = '</script>';
        $result = $this->parserStringService->searchBadTag($dives, $tagToRemove);

        $this->assertEquals(105, $result);
    }

    public function test_search_bad_tag()
    {
        $dives = StringsHtmlProvider::getBodiesFromBody();
        $tagToRemove = '</script>';
        $tagLink = '<link';
        $result = $this->parserStringService->searchBadTag($dives, $tagToRemove);
        $linkNumber = $this->parserStringService->searchBadTag($dives, $tagLink);

        $this->assertEquals(105, $result);
        $this->assertEquals(110, $linkNumber);
    }

    public function test_search_end_special_tag()
    {
        $dives = StringsHtmlProvider::getBodiesFromBody();
        $tagToRemove = '>';
        $result = $this->parserStringService->searchEndSpecialTag($dives, $tagToRemove, 179);

        $this->assertEquals(180, $result);
    }

    public function test_remove_part_array()
    {
        $dives = StringsHtmlProvider::getBodiesFromBody();

        $startNumber = 26;
        $endNumber = 90;
        $sizeToCut = ($endNumber - $startNumber) + 1;
        $cleanHtml = $this->parserStringService->removePartArray($dives, $startNumber, $endNumber);

        $expectSize = count($dives) - $sizeToCut;
        $this->assertEquals($expectSize, count($cleanHtml));
    }

    public function test_remove_tag_from_one_string()
    {
        $words = [ 6 =>'cva<script>xdh',
                   3 => '<script>xdh',
                   2 => 'va<script>'];
        $tagToRemove = '<script>';

        foreach ($words as $kay => $word) {
            $cleanWord = $this->parserStringService->RemoveTagFromOneString($word, $tagToRemove);

            $this->assertEquals($kay, strlen($cleanWord));
        }
    }

    public function test_change_string_html_to_array()
    {
        $data = StringsHtmlProvider::getInnerBody();
        $dives = $this->parserStringService->changeStringHtmlToArray($data);

        $this->assertEquals(207, count($dives));
    }
}
