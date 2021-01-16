<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        print_r("Category seeding\n");

        Category::factory()
            ->count(100)
            ->has(Image::factory()->lg())
            //->has(Image::factory()->count(2)->sm())
            ->create();
    }
}
