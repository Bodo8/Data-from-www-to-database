<?php
declare(strict_types=1);

namespace App\Providers\ParserService;

use Illuminate\Support\Facades\Config;

/**
 * Class UrlServiceProvider
 * @author BogusŁaw Trojański
 */
class UrlServiceProvider
{

    /**
     * @return string
     */
    public function getUrlFromConfig(): string
    {
        return Config::get('services.malikShop.url');
    }
}
