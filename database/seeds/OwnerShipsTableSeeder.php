<?php

use Illuminate\Database\Seeder;
use App\Ownership;

class OwnerShipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ownership::create([
            'owner_id' => 1, 'realestate_id' => 1
        ]);
    }
}
