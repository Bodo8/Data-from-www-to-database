<?php
declare(strict_types=1);

namespace App\Models\Repository\Interfaces;

use App\Models\Entity\Product;

/**
 * Class ProductRepositoryInterface
 * @author BogusŁaw Trojański
 */
interface ProductRepositoryInterface
{
    /**
     * Pobranie jednego produktu
     */
    public function getOne(int $idProduct): Product;

    /**
     * Dodanie produktu do repozytorium
     */
    public function add(Product $product): Product;
}
