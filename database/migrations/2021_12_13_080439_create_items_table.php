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
        Schema::create('bio11_titles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('price')->default(0);
            $table->timestamps();
        });
        Schema::create('bio11_frames', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_path');
            $table->integer('price')->default(0);
            $table->timestamps();
        });
        Schema::create('bio11_colors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('hex_code');
            $table->integer('price')->default(0);
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
        Schema::dropIfExists('bio11_titles');
        Schema::dropIfExists('bio11_frames');
        Schema::dropIfExists('bio11_colors');
    }
}
