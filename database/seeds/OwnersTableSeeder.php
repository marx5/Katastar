<?php

use Illuminate\Database\Seeder;
use App\Owner;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Owner::create([
            'name' => 'Ivo Ivic', 'city_id' => 1
        ]);
    }
}
