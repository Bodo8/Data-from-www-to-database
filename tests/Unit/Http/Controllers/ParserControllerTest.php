<?php
declare(strict_types=1);

namespace Tests\Unit\Http\Controllers;

use App\Http\Controllers\ParserController;
use App\Providers\ParserServiceProvider;
use App\Providers\UrlServiceProvider;
use DOMNode;
use Illuminate\Foundation\Testing\TestCase;
use Tests\CreatesApplication;

/**
 * Class ParserControllerTest
 * @author BogusŁaw Trojański
 */
class ParserControllerTest extends TestCase
{
    use CreatesApplication;

    public function test_get_data()
    {
        $provider = new UrlServiceProvider();
        $parserProvider = $this->createMock(ParserServiceProvider::class);
        $parserController = new ParserController($provider, $parserProvider);
        $data = $parserController->getData();

       $this->assertInstanceOf(DOMNode::class, $data);
    }

    public function test_get_data_wrong_url()
    {
        $provider = $this->createMock(UrlServiceProvider::class);
        $parserProvider = $this->createMock(ParserServiceProvider::class);
        $parserController = new ParserController($provider, $parserProvider);
        $provider->method('getUrlFromConfig')
            ->willReturn('https: wrong address url');

        $this->expectExceptionMessage('wrong url or check network connection');
        $parserController->getData();
    }

    protected function tearDown(): void
    {
        $config = app('config');
        parent::tearDown();
        app()->instance('config', $config);
    }
}
