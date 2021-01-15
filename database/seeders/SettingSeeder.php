<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Setting;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        Setting::factory()
            ->count(3)
            ->create()
            ->each(function (Setting $setting) use ($faker) {
                $logo_types = ['header_logo', 'footer_logo'];

                foreach ($logo_types as $type) {
                    $dimension = Setting::IMAGE_DIMENSIONS[$type];

                    $setting->images()->create([
                        'path' => $faker->imageUrl($dimension['h'], $dimension['w']),
                        'type' => $type,
                    ]);
                }
            });
    }
}
