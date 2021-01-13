<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker;

        return [
            'parent_id' => $this->faker->randomNumber(),
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text,
            'status' => $this->faker->boolean,
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}
