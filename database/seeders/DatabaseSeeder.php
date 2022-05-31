<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $product1 = Product::create([
            'name'=> 'Producte 1',
            'description'=> 'Camisa 1',
            'image'=> 'https://picsum.photos/id/237/200/300',
            'price'=> '50',
        ]);
        $product2 = Product::create([
            'name'=> 'Producte 2',
            'description'=> 'Camisa 2',
            'image'=> 'https://picsum.photos/seed/picsum/200/300',
            'price'=> '30',
        ]);
        $product3 = Product::create([
            'name'=> 'Producte 3',
            'description'=> 'Camisa 3',
            'image'=> 'https://picsum.photos/200/300',
            'price'=> '40',
        ]);
    }
}
