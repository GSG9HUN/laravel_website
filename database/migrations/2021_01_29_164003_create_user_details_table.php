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
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Country');
            $table->string('City');
            $table->string('Address');
            $table->string('Phone');
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
