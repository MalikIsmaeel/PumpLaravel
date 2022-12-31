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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('city_name');
             $table->float('vat_rate',18,2);
             $table->unsignedInteger('active');
             $table->foreignId('user_id')
             ->references('id')->on('users')
             ->onDelete('cascade');
             $table->foreignId('countery_id')
             ->references('id')->on('counteries')
             ->onDelete('cascade');
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
        Schema::dropIfExists('cities');
    }
};
