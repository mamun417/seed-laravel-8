<?php

namespace Database\Factories;

use App\Models\ShippingAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShippingAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ShippingAddress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = $this->faker;

        return [
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => $faker->safeEmail,
            'country' => $faker->colorName,
            'state' => $faker->state,
            'city' => $faker->city,
            'zipcode' => $faker->postcode,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address
        ];
    }
}
