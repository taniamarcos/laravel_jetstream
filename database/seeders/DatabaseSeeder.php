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
            'image'=> 'http://lorempixel.com/400/200/food/1/',
            'price'=> '50',
        ]);
        $product2 = Product::create([
            'name'=> 'Producte 2',
            'description'=> 'Camisa 2',
            'image'=> 'http://lorempixel.com/400/200/food/2/',
            'price'=> '30',
        ]);
        $product3 = Product::create([
            'name'=> 'Producte 3',
            'description'=> 'Camisa 3',
            'image'=> 'http://lorempixel.com/400/200/food/3/',
            'price'=> '40',
        ]);
    }
}
