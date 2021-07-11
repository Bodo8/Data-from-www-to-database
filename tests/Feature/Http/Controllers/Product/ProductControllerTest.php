<?php
declare(strict_types=1);

namespace Tests\Feature\Http\Controllers\Product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Controllers\Product\ProductController;
use App\Providers\Product\ProductService;
use Tests\CreatesApplication;
use App\Http\Requests\Product\ValidatorProduct;
use Illuminate\Support\Facades\Http;
use Mockery\MockInterface;
use Mockery;
use App\Models\Repository\Interfaces\Product\ProductRepositoryInterface;
use App\Models\Entity\Product\Product;

/**
 * Summary of ProductControllerTest
 * BogusŁaw Trojański
 */
class ProductControllerTest extends \Illuminate\Foundation\Testing\TestCase
{
    use CreatesApplication;

    public function test_create()
    {
        $productService = $this->createMock(ProductService::class);
        $productController = new ProductController($productService);
        $response = $this->call('GET', '/product/create');

        $response->assertStatus(200);
    }

    /**
     * Summary of test_store
     */
    public function test_store()
    {
        $productRepository = Mockery::mock(ProductRepositoryInterface::class)->makePartial();
        $product =  Mockery::mock(Product::class);
        $productRepository->shouldReceive('add')
               ->once()
               ->andReturn($product);

        $productService = new ProductService($productRepository);
        $productController = new ProductController($productService);
        $validator = Mockery::mock(ValidatorProduct::class)->makePartial();
        $validator->shouldReceive('validated')
                ->once()
                ->andReturn([
                'name' => 'Sara',
                'price' => '10',
                'availability' => 'well'
                ]);

        $response = $productController->store($validator);
        $this->assertEquals(302,  $response->getStatusCode());
    }

    protected function tearDown(): void
    {
        $config = app('config');
        parent::tearDown();
        app()->instance('config', $config);
    }
}
