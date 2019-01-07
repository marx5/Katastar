<?php

use Illuminate\Database\Seeder;
use App\LandRegister;

class LandRegistersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LandRegister::create([
            'name' => 'Zagreb', 'city_id' => 1
        ]);
    }
}
