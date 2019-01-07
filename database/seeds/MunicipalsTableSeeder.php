<?php

use Illuminate\Database\Seeder;
use App\Municipal;

class MunicipalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Municipal::create([
            'municipal_name' => 'Medvešćak', 'county_id' => 1
        ]);
    }
}
