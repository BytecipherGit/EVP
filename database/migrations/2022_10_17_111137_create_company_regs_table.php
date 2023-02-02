<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_regs', function (Blueprint $table) {
            $table->id();
            $table->string('oname');
            $table->string('admin');
            $table->string('website');     
            $table->string('email')->unique() ;
            $table->string('password');
            $table->string('designation');
            $table->string('dept');
            $table->string('address');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->integer('pin');
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
        Schema::dropIfExists('company_regs');
    }
};
