<?php
declare(strict_types=1);

namespace App\Models\Repository\Infrastructure\InEloquent;

use App\Exceptions\ProductNotFoundException;
use App\Models\Entity\Product;
use App\Models\Repository\Infrastructure\DAO\ProductDAO;
use App\Models\Repository\Interfaces\ProductRepositoryInterface;

/**
 * Class ProductRepository
 * @author Bogusław Trojański
 */
class ProductRepository implements ProductRepositoryInterface
{
    /**
     * Pobranie jednego produktu
     */
    public function getOne(int $idProduct): Product
    {
        $productDAO =  ProductDAO::find($idProduct);
        $this->checkIfExists($productDAO, $idProduct);
        $product = $this->convertDAOToObject($productDAO);

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
        $productDAO = ProductDAO::find($product->getId());
        $this->checkIfExists($productDAO, $product->getId());
        $productDAO->delete();
    }

    /**
     * Aktualizacja istniejącego produktu
     */
    public function update(Product $product): void
    {
        $productDAO = ProductDAO::find($product->getId());
        $this->checkIfExists($productDAO, $product->getId());
        $productDAO->name = $product->getName();
        $productDAO->price = $product->getPrice();
        $productDAO->availability = $product->getAvailability();
        $productDAO->save();
    }

    private function convertDAOToObject(\Illuminate\Database\Eloquent\Model $productDAO): Product
    {
        return new Product(
            $productDAO->id_product,
            $productDAO->name,
            $productDAO->price,
            $productDAO->availability
        );
    }

    /**
     * @param int $idProduct
     * @param $productDAO
     */
    private function checkIfExists($productDAO, int $idProduct): void
    {
        if (null == $productDAO) {
            throw ProductNotFoundException::createFromId($idProduct);
        }
    }
}
