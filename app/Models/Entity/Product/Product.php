<?php
declare(strict_types=1);

namespace App\Models\Entity\Product;

use App\Exceptions\ProductWrongParameterException;
use function in_array;

/**
 * Class Product
 * author BogusŁaw Trojański
 */
 class Product
{
    const AVAILABILITY_WELL = 'well';
    const AVAILABILITY_MEDIUM  = 'medium';
    const AVAILABILITY_LITTLE = 'little';
    const AVAILABILITY_LESS_THAN_5 = 'less-than-5';

    private $idProduct;
    private $name;
    private $price;
    private $availability;

    /**
     *  constructor.
     */
    public function __construct(?int $idProduct, string $name, int $price, string $availability)
    {
        $this->idProduct = $idProduct;
        $this->name = $name;
        $this->price = $price;
        if(!in_array($availability, self::getAllAvailability())) {
            throw ProductWrongParameterException::createFromName($availability);
        }
        $this->availability = $availability;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->idProduct;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getAvailability(): string
    {
        return $this->availability;
    }

    /**
     * @param int $insertedId
     */
    public function setIdProduct(int $insertedId): void
    {
        if ($this->getId() === null) {
            $this->idProduct = $insertedId;
        }
    }

    public static function getAvailabilityDescription(): array
    {
        return [
            self::AVAILABILITY_WELL => ('dużo'),
            self::AVAILABILITY_MEDIUM =>  ('średnio'),
            self::AVAILABILITY_LITTLE => ('mało'),
            self::AVAILABILITY_LESS_THAN_5 => ('mniej niż 5')
        ];
    }

    public static function getAllAvailability(): array
    {
        return [
            self::AVAILABILITY_WELL,
            self::AVAILABILITY_MEDIUM ,
            self::AVAILABILITY_LITTLE ,
            self::AVAILABILITY_LESS_THAN_5
        ];
    }

}
