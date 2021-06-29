<?php

namespace Database\Factories\Repository\Infrastructure\DAO;

use App\Models\Repository\Infrastructure\DAO\ProductDAO;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDAOFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductDAO::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique(),
            'price' => $this->faker->randomDigitNotNull,
            'availability' => $this->faker->randomElement(['well', 'medium', 'little', 'less-than-5'])
        ];
    }
}
