<?php
declare(strict_types=1);

namespace App\Exceptions;

use App\Exceptions\Interfaces\NotFoundExceptionInterface;

/**
 * Class ProductNotFoundException
 * @author BogusŁaw Trojański
 */
class ProductNotFoundException extends \DomainException implements NotFoundExceptionInterface
{
    public static function createFromId(int $idProduct) : self
    {
        return new self(
            sprintf('Product with given ID %s not exists', $idProduct)
        );
    }
}
