<?php
declare(strict_types=1);

namespace Tests\Feature\Repository\Infrastructure\InEloquent;

use App\Exceptions\ProductNotFoundException;
use App\Models\Entity\Product;
use App\Models\Repository\Infrastructure\DAO\ProductDAO;
use App\Models\Repository\Infrastructure\InEloquent\ProductRepository;
use Database\Seeders\Repository\Infrastructure\DAO\ProductDAOSeeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class ProductRepositoryTest
 * @author BogusŁaw Trojański
 */
class ProductRepositoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_add_new_product()
    {
        $repository = new ProductRepository();
        $productDAO = ProductDAO::factory()->make(
            ['name' => 'example', 'price' => 8, 'availability' => 'well']
        );

        $product = $this->convertDAOToObject($productDAO);
        $repository->add($product);

        $this->assertDatabaseHas('products', ['name' => 'example']);
        $this->assertDatabaseHas('products', ['price' => 8]);
        $this->assertDatabaseHas('products', ['availability' => 'well']);
    }

    public function test_add_new_10_products()
    {
        $this->seed();
        $this->seed(ProductDAOSeeder::class);

        $this->assertDatabaseCount('products', 10);
    }

    public function test_update_product()
    {
        $repository = new ProductRepository();
        $productDAO = ProductDAO::factory()->make(
            ['name' => 'example', 'price' => 8, 'availability' => 'well']
        );

        $product = $this->convertDAOToObject($productDAO);
        $product = $repository->add($product);
        $productDAOToUpdate = ProductDAO::factory()->make(
            ['name' => 'example2', 'price' => 44, 'availability' => 'well']
        );
        $update = $this->convertDAOToObject($productDAOToUpdate);
        $update->setIdProduct($product->getId());
        $repository->update($update);
        $actual = $repository->getOne($product->getId());

        $this->assertEquals($product->getId(), $actual->getId());
        $this->assertDatabaseHas('products', ['name' => 'example2']);
        $this->assertDatabaseHas('products', ['price' => 44]);
    }

    public function test_delete_product()
    {
        $repository = new ProductRepository();
        $productDAO = ProductDAO::factory()->make(
            ['name' => 'example', 'price' => 8, 'availability' => 'well']
        );

        $product = $this->convertDAOToObject($productDAO);
        $product = $repository->add($product);
        $id = $product->getId();
        $repository->remove($product);

        $this->expectException(ProductNotFoundException::class);
        $repository->getOne($id);
    }

    private function convertDAOToObject(Model $productDAO): Product
    {
        return new Product(
            null,
            $productDAO->getAttribute('name'),
            $productDAO->getAttribute('price'),
            $productDAO->getAttribute('availability')
        );
    }
}
