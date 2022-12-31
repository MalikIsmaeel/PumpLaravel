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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('meddile_name')->nullable();
            $table->string('last_name');
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('name')->unique();
           
            $table->integer('active')->default(0);
            $table->string('photo')->nullable();
            
            /*
first_name
meddile_name
last_name
phone
email
email_verified_at
password
active
photo
remember_token



            */
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
