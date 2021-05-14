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
    public static function createFromName(string $productName) : self
    {
        return new self(
            sprintf('Product with given NAME %s not exists', $productName)
        );
    }
}
