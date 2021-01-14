<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = random_int(2, 5);

        Category::factory()
            ->hasImages($images)
            ->count(100)->create();
    }
}
