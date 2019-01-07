<?php

use Illuminate\Database\Seeder;
use App\RealestateType;
class RealestateTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RealestateType::create([
            'name' => 'house'
        ]);
    }
}
