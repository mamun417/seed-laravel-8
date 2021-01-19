<?php

namespace Database\Factories;

use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderDetails::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $product = Product::inRandomOrder()->first();
        $price_with_size = $product->prices()->inRandomOrder()->first();

        return [
            'product_id' => $product->id,
            'product_size' => $product->price ? Null : $price_with_size->size,
            'product_color' => $this->faker->randomElement(json_decode($product->color, true)),
            'product_price' => $product->price ??  $price_with_size->price,
            'product_quantity' => $product->price ? $product->stock :  $price_with_size->stock,
        ];
    }
}
