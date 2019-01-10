<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ownerships', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('owner_id');
            /*$table->foreign('owner_id')->references('id')->on('owners');*/
            $table->unsignedInteger('realestate_id');
            /*$table->foreign('realestate_id')->references('id')->on('realestates');*/
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
        Schema::drop('ownerships');
    }
}
