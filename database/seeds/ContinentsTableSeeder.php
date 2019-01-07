<?php

use Illuminate\Database\Seeder;

class ContinentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Continent::create([
            'continent_name' => 'Asia',
            'number_of_countries' => '48',
            'native_name' => 'Azija'
        ]);
    }
}
