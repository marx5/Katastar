<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     $this->call(CountiesTableSeeder::class);
     $this->call(MunicipalsTableSeeder::class);
     $this->call(CitiesTableSeeder::class);
     $this->call(LandRegistersTableSeeder::class);
     $this->call(OwnersTableSeeder::class);
     $this->call(RealestateTypeTableSeeder::class);
     $this->call(RealestatesTableSeeder::class);
     $this->call(OwnerShipsTableSeeder::class);
    }
}
