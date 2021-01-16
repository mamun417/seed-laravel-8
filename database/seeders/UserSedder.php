<?php

namespace Database\Seeders;

use App\Models\ShippingAddress;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UserSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        print_r("User seeding\n");

        User::factory()
            ->count(10)
            ->hasShippingAddress(1)
            ->create();
            /*->each(function (User $user) {
                if (($user->id % 2) == 0) {
                    $shipping_address = ShippingAddress::factory()->make()->toArray();
                    $user->shippingAddress()->create($shipping_address);
                }
            });*/
    }
}
