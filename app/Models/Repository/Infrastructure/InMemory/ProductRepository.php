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
    private $repositoryId = 0;

    public function getOne(int $idProduct): Product
    {
        if (isset($this->repository[$idProduct])) {
            return $this->repository[$idProduct];
        }
        throw ProductNotFoundException::createFromId($idProduct);
    }

    public function add(Product $product): Product
    {
        $this->repositoryId++;

        $created = new Product(
            $this->repositoryId,
            $product->getName(),
            $product->getPrice(),
            $product->getAvailability()
        );

        $this->repository[$this->repositoryId] = $created;
        return $created;
    }

    public function update(Product $product): void
    {
        if (isset($this->repository[$product->getId()])){
            $this->repository[$product->getId()] = $product;
        } else {
            throw ProductNotFoundException::createFromId($product->getId());
        }
    }

    public function remove(Product $product): void
    {
        if (isset($this->repository[$product->getId()])){
            unset($this->repository[$product->getId()]);
        } else {
            throw ProductNotFoundException::createFromId($product->getId());
        }
    }
}
