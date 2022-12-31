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
        Schema::create('counteries', function (Blueprint $table) {
             $table->id();
             $table->string('countery_name');
             $table->string('countery_nameAr');
             $table->float('vat_rate',18,2);
             $table->unsignedInteger('active');
             $table->foreignId('user_id')
             ->references('id')->on('users')
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
        Schema::dropIfExists('counteries');
    }
};
