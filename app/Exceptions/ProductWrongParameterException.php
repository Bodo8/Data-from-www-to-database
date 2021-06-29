<?php
declare(strict_types=1);

namespace App\Exceptions;

use App\Exceptions\Interfaces\NotFoundExceptionInterface;
use App\Exceptions\Interfaces\WrongParameterExceptionInterface;

/**
 * Class ProductWrongParameterException
 * @author BogusŁaw Trojański
 */
class ProductWrongParameterException extends \DomainException implements WrongParameterExceptionInterface
{
    public static function createFromName(string $availability) : self
    {
        return new self(
            sprintf('given parameter AVAILABILITY %s not belong to correct enum', $availability)
        );
    }
}
