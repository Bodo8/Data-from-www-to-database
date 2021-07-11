<?php
declare(strict_types=1);

namespace Tests\Unit\Models\Repository\Infrastructure\InMemory\Product;

use App\Exceptions\ProductNotFoundException;
use App\Models\Repository\Infrastructure\InMemory\Product\ProductRepository;
use PHPUnit\Framework\TestCase;
use Tests\MotherObject\Product\ProductMother;
use App\Models\Entity\Product\Product;

/**
 * Class ProductRepositoryTest
 * author BogusŁaw Trojański
 */
class ProductRepositoryTest extends TestCase
{
    private ProductRepository $repository;

    protected function setUp(): void
    {
        $this->repository = new ProductRepository();

        parent::setUp();
    }

    public function test_add_new_product()
    {
        $product = ProductMother::getOne();
        $actual = $this->repository->add($product);

        $this->assertProduct($product, $actual);
    }

    public function test_get_product()
    {
        $product = ProductMother::getOne();
        $product = $this->repository->add($product);
        $actual = $this->repository->getOne($product->getId());

        $this->assertProduct($product, $actual);
    }

    public function test_get_unknown_product()
    {
        $this->expectException(ProductNotFoundException::class);
        $this->repository->getOne(100);
    }

    public function test_delete_product()
    {
        $product = ProductMother::getOne();
        $product = $this->repository->add($product);
        $id = $product->getId();
        $this->repository->remove($product);

        $this->expectException(ProductNotFoundException::class);
        $this->repository->getOne($id);
    }

    public function test_update_product()
    {
        $product = ProductMother::getOne();
        $product = $this->repository->add($product);
        $update = ProductMother::getDifferentProduct();
        $update->setIdProduct($product->getId());
        $this->repository->update($update);
        $actual = $this->repository->getOne($product->getId());

        $this->assertProduct($update, $actual);
        $this->assertEquals($product->getId(), $actual->getId());
    }

    public function test_set_wrong_id_product_is_impossible()
    {
        $product = ProductMother::getOne();
        $product = $this->repository->add($product);
        $actual = $this->repository->getOne($product->getId());
        $actual->setIdProduct(345);
        $this->assertEquals($product->getId(), $actual->getId());
    }

    private function assertProduct(Product $product, Product $actual): void
    {
        $this->assertEquals($product->getName(), $actual->getName());
        $this->assertEquals($product->getPrice(), $actual->getPrice());
        $this->assertEquals($product->getAvailability(), $actual->getAvailability());
    }
}
