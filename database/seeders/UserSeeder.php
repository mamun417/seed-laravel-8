<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\ShippingAddress;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        print_r("User seeding\n");

        User::factory()
            ->count(50)
            ->hasShippingAddress(1)
            ->has(Order::factory()->count(random_int(1, 20)))
            ->create();
    }
}
