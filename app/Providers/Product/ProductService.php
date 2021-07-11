<?php

namespace App\Providers\Product;

use App\Models\Entity\Product\Product;
use App\Models\Repository\Interfaces\Product\ProductRepositoryInterface ;

/**
 * Summary of ProductService
 * author Bogusław Trojański
 */
class ProductService
{
    private ProductRepositoryInterface $productRepository;

    /**
     * constructor.
     */
    public function __construct(
        ProductRepositoryInterface $productRepository
    )
    {
        $this->productRepository = $productRepository;
      //  $this->paginationRepository = $paginationRepository;
    }

    //public function getOneProduct(int $idProduct): ProductDAO
    //{
    //    $product = $this->productRepository->getOne($idProduct);
    //    $productDao = $this->convertToDao($product);

    //    return $productDao;
    //}

    public function saveProduct(string $name, int $price, string $availability): Product
    {
        $product = $this->setDataProduct($name, $price, $availability);
        return $this->productRepository->add($product);
    }

    //public function removeProduct(int $idProduct): void
    //{
    //    $product = $this->productRepository->getOne($idProduct);
    //    $this->productRepository->remove($product);
    //}

    //public function getPage(int $number): Paginator
    //{
    //    return $this->paginationRepository->getPage($number);
    //}

    //public function updateProduct(int $idProduct, string $name, int $price, string $currency): void
    //{
    //    $product = $this->setDataProduct($name, $price, $currency, $idProduct);
    //    $this->productRepository->update($product);
    //}

    private function setDataProduct(string $name, int $price, string $availability, int $idProduct = null): Product
    {
        return new Product(
          $idProduct,
          $name,
          $price,
          $availability
        );
    }

    private function convertToDao(Product $product): ProductDAO
    {
        $productDAO = new ProductDAO();
        $productDAO->name = $product->getName();
        $productDAO->price = $product->getPrice();
        $productDAO->availability = $product->getAvailability;

        return $productDAO;
    }
}
?>
