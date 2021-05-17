<?php
declare(strict_types=1);

namespace App\Providers;

use App\Http\Controllers\ParserController;

/**
 * Class ParserServiceProvider
 * @author BogusŁaw Trojański
 */
class ParserServiceProvider
{

    public function saveToDataBase(\DOMDocument $dom)
    {
        print_r($dom);
        $form = $dom->getElementsByTagName('form');
        // print_r($form);
        $items = $form->item(0);
        $innerHTML = '';
        $children = $items->childNodes;

        foreach ($children as $child) {
           $innerHTML .= $child->ownerDocument->saveHTML($child);

        }

         var_dump($innerHTML);
        return $innerHTML;
    }
}
