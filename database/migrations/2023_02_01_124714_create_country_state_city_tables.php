<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryStateCityTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
        Schema::create('countries_', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sortname');
            $table->string('phonecode');
            $table->timestamps();
        });
        Schema::create('states_', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('country_id');
            $table->timestamps();
        });
        Schema::create('cities_', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('state_id');            
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
        Schema::drop('countries_');
        Schema::drop('states_');
        Schema::drop('cities_');
    }
}
