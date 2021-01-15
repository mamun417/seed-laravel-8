<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'path' => $this->faker->imageUrl(200, 100)
        ];
    }

    public function lg(): ImageFactory
    {
        $dimension = Image::IMAGE_DIMENSIONS['lg'];

        return $this->state(function (array $attributes) use ($dimension) {
            return [
                'path' => $this->faker->imageUrl($dimension['w'], $dimension['h']),
                'type' => 'lg',
            ];
        });
    }

    public function sm(): ImageFactory
    {
        return $this->state(function (array $attributes) {
            return [
                'path' => $this->faker->imageUrl(23, 323),
                'type' => 'sm',
            ];
        });
    }

    /*public function footerLogo(): ImageFactory
    {
        return $this->state(function (array $attributes) {
            return [
                'path' => $this->faker->imageUrl(200, 400),
                'type' => 'footer_logo',
            ];
        });
    }

    public function headerLogo(): ImageFactory
    {
        return $this->state(function (array $attributes) {
            return [
                'path' => $this->faker->imageUrl(250, 400),
                'type' => 'header_logo',
            ];
        });
    }*/
}
