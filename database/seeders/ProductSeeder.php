<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductPrice;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        Product::factory()
            ->count(100)
            ->create()
            ->each(function (Product $product) {
                if (!$product->price) {

                    $product_prices = ProductPrice::factory()
                        ->count(random_int(1, 3))
                        ->make();

                    $product->prices()->saveMany($product_prices);
                }
            });
    }
}
