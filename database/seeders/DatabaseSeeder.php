<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ShippingMethodSeeder::class,
            SocialSeeder::class,
            TaxSeeder::class,
            SettingSeeder::class,
            AdminSeeder::class,
            BrandSeeder::class,
            SliderSeeder::class,
            CategorySeeder::class,
            UserSedder::class,
            CouponSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
