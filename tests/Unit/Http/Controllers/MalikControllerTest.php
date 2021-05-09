<?php
declare(strict_types=1);

namespace Tests\Unit\Http\Controllers;

use App\Http\Controllers\MalikController;
use Illuminate\Foundation\Testing\TestCase;

/**
 * Class MalikControllerTest
 * @author BogusŁaw Trojański
 */
class MalikControllerTest extends TestCase
{
    public function test_get_data()
    {
        $malikController = new MalikController();
        $data = $malikController->getData();

        self::assertEquals("https://zabawki-malik.pl/happy-people,187,0.html", $data);
    }

    /**
     * @inheritDoc
     */
    public function createApplication()
    {
        $app = require 'bootstrap/app.php';

        $app->loadEnvironmentFrom('.env.testing');

        $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

        return $app;
    }
}
