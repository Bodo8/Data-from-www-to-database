<?php
declare(strict_types=1);

namespace App\Providers\ParserService;

/**
 * Class ParserMainService
 * @author BogusŁaw Trojański
 */
class ParserMainService
{

    private const BAD_TAGS = [
        'SCRIPT' =>
            [
                'BEGINNING' => '<script>',
                'END' => '</script>'
            ],
        'LINK' =>
            [
                'BEGINNING' => '<link',
                'END' => '>'
            ]
    ];

    private ParserStringService $parserStringService;

    /**
     * ParserMainService constructor.
     */
    public function __construct()
    {
        $this->parserStringService = new ParserStringService();
    }

    /**
     * @param string $innerBody
     * @return array
     */
    public function cleanHtmlStringsFromBadTags(string $innerBody): array
    {
        $bodiesFromBody = $this->parserStringService->changeStringHtmlToArray($innerBody);

        foreach (self::BAD_TAGS as $TAG) {
            $badTags = true;

            while ($badTags) {
                $startNumber = $this->getStartNumber($bodiesFromBody, $TAG);
                $endNumber = $this->getEndNumber($bodiesFromBody, $TAG);

                if ($endNumber < $startNumber) {
                    $endNumber = $this->getSpecialEndNumber($bodiesFromBody, $TAG, $startNumber);
                }

                if ($startNumber < count($bodiesFromBody)
                    && $endNumber < count($bodiesFromBody)) {

                    $bodiesFromBody = $this->removeTagsFromOneWord(
                        $bodiesFromBody, $startNumber, $TAG, $endNumber);

                    $bodiesFromBody = $this->parserStringService->removePartArray(
                        $bodiesFromBody, $startNumber, $endNumber);

                } else {
                    $badTags = false;
                }
            }
        }

        return $bodiesFromBody;
    }

    /**
     * @param array $bodiesFromBody
     * @param int $startNumber
     * @param $TAG
     * @param int $endNumber
     * @return array
     */
    private function removeTagsFromOneWord(
        array $bodiesFromBody, int $startNumber, array $TAG, int $endNumber
    ): array
    {
        $startTagToRemove = $bodiesFromBody[$startNumber];
        $cleanWord = $this->parserStringService->RemoveTagFromOneString(
            $startTagToRemove, $TAG['BEGINNING']
        );
        $bodiesFromBody[$startNumber] = $cleanWord;

        $endTagToRemove = $bodiesFromBody[$endNumber];
        $cleanWord = $this->parserStringService->RemoveTagFromOneString(
            $endTagToRemove, $TAG['END']
        );
        $bodiesFromBody[$endNumber] = $cleanWord;

        return $bodiesFromBody;
    }

    /**
     * @param array $bodiesFromBody
     * @param $TAG
     * @return int
     */
    private function getStartNumber(array $bodiesFromBody, $TAG): int
    {
        $startNumber = $this->parserStringService->searchBadTag(
            $bodiesFromBody, $TAG['BEGINNING']);

        return $startNumber;
    }

    /**
     * @param array $bodiesFromBody
     * @param $TAG
     * @return int
     */
    private function getEndNumber(array $bodiesFromBody, $TAG): int
    {
        $endNumber = $this->parserStringService->searchBadTag(
            $bodiesFromBody, $TAG['END']);
        return $endNumber;
    }

    /**
     * @param array $bodiesFromBody
     * @param $TAG
     * @param int $startNumber
     * @return int
     */
    private function getSpecialEndNumber(array $bodiesFromBody, $TAG, int $startNumber): int
    {
        $endNumber = $this->parserStringService->searchEndSpecialTag(
            $bodiesFromBody, $TAG['END'], $startNumber);
        return $endNumber;
    }
}
