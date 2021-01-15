<?php

namespace Database\Factories;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Setting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'header_top_title' => $this->faker->unique()->sentence,
            'description_one' => $this->faker->unique()->text,
            'description_two' => $this->faker->text,
            'status' => $this->faker->boolean
        ];
    }
}
