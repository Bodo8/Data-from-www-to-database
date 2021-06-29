<?php

namespace Database\Seeders\Repository\Infrastructure\DAO;

use Illuminate\Database\Seeder;
use App\Models\Repository\Infrastructure\DAO\ProductDAO;
use Ramsey\Uuid\Uuid;

class ProductDAOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            ProductDAO::factory()->create(
                ['name' => (string)Uuid::uuid4()]
            );
        }
    }
}
