<?php

namespace Database\Factories;

use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CouponFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coupon::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */
    public function definition(): array
    {
        $faker = $this->faker;

        return [
            'code' => $faker->unique()->firstName,
            'apply_type' => random_int(1, 2),
            'value' => random_int(10, 90),
            'usable_quantity' => random_int(5, 15),
            'count' => function (array $attributes) {
                return $attributes['usable_quantity'] - random_int(1, 5);
            },
            'started_at' => Carbon::now()->addDays(random_int(1, 15)),
            'expired_at' => function (array $attributes) {
                return Carbon::instance($attributes['started_at'])->addDays(random_int(0, 10));
            },
            'description' => $faker->text,
            'status' => $faker->boolean
        ];
    }
}
