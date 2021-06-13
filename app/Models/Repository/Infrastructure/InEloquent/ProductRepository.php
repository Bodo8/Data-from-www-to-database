<?php
declare(strict_types=1);

namespace App\Models\Repository\Infrastructure\InEloquent;

use App\Models\Entity\Product;
use App\Models\Repository\Infrastructure\DAO\ProductDAO;

/**
 * Class ProductRepository
 * @author Bogusław Trojański
 */
class ProductRepository implements Product\ProductRepositoryInterface
{
    /**
     * Pobranie jednego produktu
     */
    public function getOne(int $idProduct): Product
    {
        $productDao =  ProductDAO::findOrFail($idProduct);
        $product = $this->convertDaoToObject($productDao);

        return $product;
    }

    /**
     * Dodanie produktu do repozytorium
     */
    public function add(Product $product): Product
    {
        $productDAO = new ProductDAO();
        $productDAO->name = $product->getName();
        $productDAO->price = $product->getPrice();
        $productDAO->availability = $product->getAvailability();

        $productDAO->save();
        $insertedId = $productDAO->id_product;
        $product->setIdProduct($insertedId);

        return $product;
    }

    /**
     * Usunięcie produktu z repozytorium
     */
    public function remove(Product $product): void
    {
        $productDAO = ProductDAO::findOrFail($product->getId());
        $productDAO->delete();
    }

    /**
     * Aktualizacja istniejącego produktu
     */
    public function update(Product $product): void
    {
        $productDAO = ProductDAO::findOrFail($product->getId());
        $productDAO->name = $product->getName();
        $productDAO->price = $product->getPrice();
        $productDAO->availability = $product->getAvailability();
        $productDAO->save();
    }

    private function convertDaoToObject(\Illuminate\Database\Eloquent\Model $productDao): Product
    {
        return new Product(
            $productDao->id_product,
            $productDao->name,
            $productDao->price,
            $productDao->availability
        );
    }
}
