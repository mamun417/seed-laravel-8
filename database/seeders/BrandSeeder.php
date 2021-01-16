<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        print_r("Brand seeding\n");

        $images = random_int(2, 5);
        Brand::factory()->hasImages($images)->count(100)->create();
    }
}
