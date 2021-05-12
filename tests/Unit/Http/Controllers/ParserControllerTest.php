<?php
declare(strict_types=1);

namespace Tests\Unit\Http\Controllers;

use App\Http\Controllers\ParserController;
use App\Providers\UrlServiceProvider;
use Illuminate\Foundation\Testing\TestCase;

/**
 * Class ParserControllerTest
 * @author BogusŁaw Trojański
 */
class ParserControllerTest extends TestCase
{

    public function test_get_data()
    {
        $provider = new UrlServiceProvider();
        $parserController = new ParserController($provider);
        $data = $parserController->getData();

        self::assertInstanceOf(\DOMDocument::class, $data);
    }

    public function test_get_data_wrong_url()
    {
        $provider = $this->createMock(UrlServiceProvider::class);
        $parserController = new ParserController($provider);
        $provider->method('getUrlFromConfig')
            ->willReturn('https: wrong address url');

        self::expectExceptionMessage('wrong url or check network connection');
        $parserController->getData();
    }

    protected function tearDown(): void
    {
        $config = app('config');
        parent::tearDown();
        app()->instance('config', $config);
    }

    public function createApplication()
    {
        $app = require 'bootstrap/app.php';

        $app->loadEnvironmentFrom('.env.testing');

        $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

        return $app;
    }
}
