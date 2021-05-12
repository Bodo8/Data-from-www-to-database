<?php
declare(strict_types=1);

namespace Unit\Providers;

use App\Providers\UrlServiceProvider;
use PHPUnit\Framework\TestCase;

/**
 * Class UrlServiceProviderTest
 * @author BogusŁaw Trojański
 */
class UrlServiceProviderTest extends TestCase
{

    public function test_get_url_from_config()
    {
        $urlProvider = new UrlServiceProvider();
        $url = $urlProvider->getUrlFromConfig();

        $this->assertEquals(
            "https://zabawki-malik.pl/happy-people,187,0.html", $url
        );
    }
}
