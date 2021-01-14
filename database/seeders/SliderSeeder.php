<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        $images = random_int(2, 5);
        Slider::factory()->hasImages($images)->count(3)->create();
    }
}
