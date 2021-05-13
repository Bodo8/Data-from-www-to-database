<?php
declare(strict_types=1);

namespace Unit\Providers;

use App\Http\Controllers\ParserController;
use App\Providers\UrlServiceProvider;
use PHPUnit\Framework\TestCase;

/**
 * Class ParserServiceProviderTest
 * @author BogusŁaw Trojański
 */
class ParserServiceProviderTest extends TestCase
{

    public function test_get_main_dives()
    {
        $provider = new UrlServiceProvider();
        $parserController = new ParserController($provider);
        $dom = $parserController->getData();
        $body = $dom->getElementsByTagName('body');
        $wrapper = $body->item(0);
        $backgroundDiv = $wrapper->firstChild;

        self::assertInstanceOf(\DOMDocument::class, $dom);

    }
}
