<?php

namespace Database\Seeders;

use App\Models\rate;
use Illuminate\Database\Seeder;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // rate::truncate();
        rate::factory()->count(30)->create();
    }
}