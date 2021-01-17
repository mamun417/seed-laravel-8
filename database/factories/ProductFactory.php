<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tax;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\Null_;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws Exception
     */
    public function definition(): array
    {
        return [
            'category_id' => function () {
                if (Category::count()) {
                    return Category::all()->random(1)->first()->id;
                } else {
                    return Category::factory()->create()->id;
                }
            },

            'brand_id' => function () {
                if (Brand::count()) {
                    return Brand::all()->random(1)->first()->id;
                } else {
                    return Brand::factory()->create()->id;
                }
            },

            'tax_id' => function () {
                if (Tax::count()) {
                    return Tax::active()->get()->random(1)->first()->id;
                } else {
                    return Tax::factory()->create()->id;
                }
            },

            'name' => $this->faker->unique()->name,
            'price' => $this->faker->randomFloat(2, 20, 500),

            'discount_price' => function (array $attributes) {
                return $this->faker->boolean ? $attributes['price'] - 15 : Null;
            },

            'stock' => random_int(10, 100),
            'code' => $this->faker->streetSuffix,
            'color' => 'red',
            'details' => $this->faker->text,
            'weight' => random_int(1, 50),
            'status' => $this->faker->boolean,
            'feature' => $this->faker->boolean,
            'on_sale' => $this->faker->boolean
        ];
    }
}
