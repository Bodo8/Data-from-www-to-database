<?php
declare(strict_types=1);

namespace Tests\Unit\Models\Entity;

use App\Models\Entity\Product;
use PHPUnit\Framework\TestCase;
use Tests\MotherObject\ProductMother;

/**
 * Class ProductTest
 * @author BogusŁaw Trojański
 */
class ProductTest extends TestCase
{
    public function test_instance_product()
    {
        $product = ProductMother::getOne();

        $this->assertInstanceOf(Product::class, $product);
    }
}
