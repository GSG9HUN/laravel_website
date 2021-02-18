<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('brand');
            $table->integer('price');
            $table->integer('quantity');
            $table->string('image');
            $table->text('description')->nullable();
            $table->string('frequency');
            $table->string('turbo')->nullable();
            $table->string('cache')->nullable();
            $table->string('socket')->nullable();
            $table->string('type')->nullable();
            $table->string('capacity')->nullable();
            $table->string('core')->nullable();
            $table->string('thread')->nullable();
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
        Schema::dropIfExists('items');
    }
}
