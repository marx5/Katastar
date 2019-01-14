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
            'number_of_countries' => '52',
            'native_name' => 'Azija'
        ]);
        
        App\Continent::create([
            'continent_name' => 'Europe',
            'number_of_countries' => '48',
            'native_name' => 'Europa'
        ]);

        App\Continent::create([
            'continent_name' => 'North America',
            'number_of_countries' => '12',
            'native_name' => 'Sj America'
        ]);

        App\Continent::create([
            'continent_name' => 'Africa',
            'number_of_countries' => '60',
            'native_name' => 'Afrika'
        ]);

        App\Continent::create([
            'continent_name' => 'South America',
            'number_of_countries' => '33',
            'native_name' => 'J America'
        ]);

        App\Continent::create([
            'continent_name' => 'Australia',
            'number_of_countries' => '100',
            'native_name' => 'Australija'
        ]);
    }
}
