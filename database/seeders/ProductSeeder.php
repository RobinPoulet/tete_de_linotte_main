<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::updateOrInsert([
            'id' => 1
        ], [
            'name' => 'Serre tête',
            'price' => 1000,
            'weight' => 200,
            'quantity' => 5
        ]);
    }
}
