<?php

namespace Database\Factories;

use App\Models\ProductPrice;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductPriceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductPrice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws Exception
     */
    public function definition()
    {
        return [
            'size' => function () {
                $sizes = [
                    'sm', 'lg', 'md', 'xl', '2-xl', '3-xl'
                ];

                return $this->faker->randomElement($sizes);
            },

            'price' => function (array $attributes) {
                return $this->faker->randomFloat(2, 20, 1000);
            },

            'discount_price' => function (array $attributes) {
                return $this->faker->boolean ? $attributes['price'] - random_int(5, 15) : Null;
            },

            'stock' => random_int(10, 30)
        ];
    }
}
