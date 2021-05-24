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

    public function __construct()
    {
        $this->parserStringService = new ParserStringService();
    }

    public function cleanHtmlStringsFromBadTags(string $innerBody): array
    {
        $bodiesFromBody = $this->parserStringService->changeStringHtmlToArray($innerBody);

        foreach (self::BAD_TAGS as $TAG) {
            $badTags = true;

            while ($badTags) {
                $startNumber = $this->parserStringService->searchBadTag(
                    $bodiesFromBody, $TAG['BEGINNING']
                );

                $endNumber = $this->parserStringService->searchBadTag(
                    $bodiesFromBody, $TAG['END']
                );

                if ($endNumber < $startNumber) {
                    $endNumber = $this->parserStringService->searchEndSpecialTag(
                        $bodiesFromBody, $TAG['END'], $startNumber
                    );
                }

                if ($startNumber < count($bodiesFromBody)
                    && $endNumber < count($bodiesFromBody)) {

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

                    $bodiesFromBody = $this->parserStringService->removePartArray(
                        $bodiesFromBody, $startNumber, $endNumber
                    );

                } else {
                    $badTags = false;
                }
            }
        }


        return $bodiesFromBody;
    }
}
