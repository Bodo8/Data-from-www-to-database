<?php
declare(strict_types=1);

namespace Tests\Unit\Models\Repository\Infrastructure\InMemory;

use App\Exceptions\ProductNotFoundException;
use App\Models\Repository\Infrastructure\InMemory\ProductRepository;
use PHPUnit\Framework\TestCase;
use Tests\Unit\Models\MotherObject\ProductMother;

/**
 * Class ProductRepositoryTest
 * @author BogusŁaw Trojański
 */
class ProductRepositoryTest extends TestCase
{
    public function test_add_new_product()
    {
        $repository = new ProductRepository();
        $product = ProductMother::getOneByName('zabawka');
        $actual = $repository->add($product);

        $this->assertEquals($product, $actual);
    }

    public function test_get_product()
    {
        $repository = new ProductRepository();
        $product = ProductMother::getOneByName('zabawka');
        $repository->add($product);
        $actual = $repository->getOneByName($product->getName());

        $this->assertEquals($product, $actual);
    }

    public function test_get_unknown_product()
    {
        $repository = new ProductRepository();

        $this->expectException(ProductNotFoundException::class);
        $repository->getOneByName('zabawka');
    }
}
