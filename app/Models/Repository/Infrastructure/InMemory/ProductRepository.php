<?php
declare(strict_types=1);

namespace App\Models\Repository\Infrastructure\InMemory;

use App\Exceptions\ProductNotFoundException;
use App\Models\Entity\Product;
use App\Models\Repository\Interfaces\ProductRepositoryInterface;

/**
 * Class ProductRepository
 * @author BogusŁaw Trojański
 */
class ProductRepository implements ProductRepositoryInterface
{
    private $repository = [];

    public function getOneByName(string $productName): Product
    {
        if (isset($this->repository[$productName])) {
            return $this->repository[$productName];
        }
        throw ProductNotFoundException::createFromName($productName);
    }

    public function add(Product $product): Product
    {
        $this->repository[$product->getName()] = $product;

        return $product;
    }
}
