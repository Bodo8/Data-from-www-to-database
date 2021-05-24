<?php
declare(strict_types=1);

namespace App\Providers\ParserService;

/**
 * Class ParserStringService
 * @author BogusŁaw Trojański
 */
class ParserStringService
{

    private static string $tag = '';

    /**
     * @param array $innerBody
     * @param string $tagToRemove
     * @return int
     */
    public function searchBadTag(array $innerBody, string $tagToRemove): int
    {
        self::$tag = $tagToRemove;
        $collectionHtml = collect($innerBody);

        $number =  $collectionHtml->search(function ($value){
            return stripos($value, self::$tag) !==false;
        });

        if (is_bool($number)) {
            return (count($innerBody) + 1);
        }

        return $number;
    }

    /**
     * @param string $word
     * @param string $tagToRemove
     * @return string
     */
    public function RemoveTagFromOneString(string $word, string $tagToRemove): string
    {
        self::$tag = $tagToRemove;
        $number = stripos($word, self::$tag);
        $tagSize =  strlen(self::$tag);
        $endNumber = $number + $tagSize;

        $endWord = substr($word,$endNumber);

        $firstPart = '';
        if ($number > 0) {
            $firstPart = substr($word,0, $number);
        }

        return $firstPart . $endWord;
    }

    /**
     * @param array $html
     * @param int $startNumber
     * @param int $endNumber
     * @return array
     */
    public function removePartArray(array $html, int $startNumber, int $endNumber)
    {
        $collection = collect($html);
        $sizeToCut = ($endNumber - $startNumber);

        $collection->splice(($startNumber - 1), ($sizeToCut + 1));

        return $collection->all();
    }

    /**
     * @param array $bodiesFromBody
     * @param string $endTag
     * @param int $startNumber
     * @return int
     */
    public function searchEndSpecialTag(array $bodiesFromBody, string $endTag, int $startNumber): int
    {
        for ($i = ($startNumber + 1); $i < count($bodiesFromBody); $i++) {

            if (stripos($bodiesFromBody[$i], $endTag) !== false) {
                return $number = $i;
            }
        }

        return (count($bodiesFromBody) + 1);
    }

    /**
     * @param string $innerBody
     * @return array
     */
    public function changeStringHtmlToArray(string $innerBody): array
    {
        return str_word_count($innerBody,1, '></ =0123456789');
    }
}
