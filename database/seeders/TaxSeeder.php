<?php

namespace Database\Seeders;

use App\Models\Tax;
use Database\Factories\TaxFactory;
use Illuminate\Database\Seeder;

class TaxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        print_r("Tax seeding\n");

        Tax::factory()->count(5)->create();
    }
}
