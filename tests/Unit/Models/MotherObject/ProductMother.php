<?php
declare(strict_types=1);

namespace Tests\Unit\Models\MotherObject;

use App\Models\Entity\Product;

/**
 * Class ProductMother
 * @author BogusŁaw Trojański
 */
final class ProductMother
{
    public static function getOneByName(string $name): Product
    {
        return new Product(
            $name,
            25,
            Product::AVAILABILITY_LESS_THAN_5

        );
    }
}
