<?php
declare(strict_types=1);

namespace Tests\MotherObject\Product;

use App\Models\Entity\Product\Product;


/**
 * Class ProductMother
 * author BogusŁaw Trojański
 */
final class ProductMother
{
    public static function getOne(): Product
    {
        return new Product(
            null,
            'product example',
            25,
            Product::AVAILABILITY_LESS_THAN_5

        );
    }

    public static function getDifferentProduct(): Product
    {
        return new Product(
            null,
            'product different',
            3,
            Product::AVAILABILITY_LITTLE

        );
    }
}
