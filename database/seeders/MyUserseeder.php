<?php

namespace Database\Seeders;

use App\Models\MyUser;
use Illuminate\Database\Seeder;

class MyUserseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MyUser::truncate();
        MyUser::factory()->count(100)->create();
    }
}
