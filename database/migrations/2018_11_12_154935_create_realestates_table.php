<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealestatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realestates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->unsignedInteger('realestate_type_id');
            $table->foreign('realestate_type_id')->references('id')->on('realestate_types');
            $table->unsignedInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('owners');
            $table->unsignedInteger('land_register_id');
            $table->foreign('land_register_id')->references('id')->on('land_registers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('realestates');
    }
}
