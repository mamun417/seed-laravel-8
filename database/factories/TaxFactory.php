<?php

namespace Database\Factories;

use App\Models\Tax;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaxFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tax::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */
    public function definition()
    {
        $tax_type = Tax::TAX_TYPE;

        return [
            'name' => $this->faker->unique()->name,
            'type' => array_rand($tax_type),
            'tax' => random_int(10, 80),
            'status' => $this->faker->boolean
        ];
    }
}
