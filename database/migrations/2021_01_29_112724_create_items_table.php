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
            $table->text('frequency')->nullable();
            $table->string('turbo')->nullable();
            $table->string('cache')->nullable();
            $table->string('socket')->nullable();
            $table->string('type')->nullable();
            $table->string('memory_type')->nullable();
            $table->string('max_resolution')->nullable();
            $table->string('slot')->nullable();
            $table->string('series')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('DisplayPort')->nullable();
            $table->string('DVI')->nullable();
            $table->string('HDMI')->nullable();
            $table->string('capacity')->nullable();
            $table->string('core')->nullable();
            $table->string('thread')->nullable();
            $table->string('cpu_slot')->nullable();
            $table->string('chipset')->nullable();
            $table->string('sup_proc')->nullable();
            $table->string('video_slot')->nullable();
            $table->boolean('dual_channel')->nullable();
            $table->integer('memory_slots')->nullable();
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
