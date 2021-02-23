<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('email');
            $table->string('FirstName')->nullable();
            $table->string('LastName')->nullable();
            $table->string('Country')->nullable();
            $table->string('City')->nullable();
            $table->string('Address')->nullable();
            $table->string('Phone')->nullable();
            $table->timestamps();

            $table->foreign('email')->references('email')->on('users')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
