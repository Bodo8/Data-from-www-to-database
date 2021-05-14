<?php
declare(strict_types=1);

namespace App\Models\Entity;

/**
 * Class Product
 * @author BogusŁaw Trojański
 */
class Product
{
    const AVAILABILITY_WELL = 'well';
    const AVAILABILITY_MEDIUM  = 'medium';
    const AVAILABILITY_LITTLE = 'little';
    const AVAILABILITY_LESS_THAN_5 = 'less-than-5';

    private $name;
    private $price;
    private $availability;

    /**
     * Product constructor.
     */
    public function __construct(string $name, int $price, string $availability)
    {
        $this->name = $name;
        $this->price = $price;
        $this->availability = $availability;
    }

    public static function getAvailabilityDescription()
    {
        return [
            self::AVAILABILITY_WELL => _('dużo'),
            self::AVAILABILITY_MEDIUM =>  _('średnio'),
            self::AVAILABILITY_LITTLE => _('mało'),
            self::AVAILABILITY_LESS_THAN_5 => _('mniej niż 5')
        ];
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
}
