<?php

use Illuminate\Database\Seeder;
use App\Realestate;

class RealestatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Realestate::create([
            'name' => 'house', 'realestate_type_id' => 1, 'city_id' => 1
        ]);
    }
}
