<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bio11_users_titles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('title_id');
            $table->timestamps();
        });
        Schema::create('bio11_users_frames', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('frame_id');
            $table->timestamps();
        });
        Schema::create('bio11_users_colors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('color_id');
            $table->timestamps();
        });

        Schema::table('bio11_users_titles', function (Blueprint $table) {
            //
            $table->foreign('user_id')
            ->references('id')->on('bio11_users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('title_id')
            ->references('id')->on('bio11_titles')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });

        Schema::table('bio11_users_frames', function (Blueprint $table) {
            //
            $table->foreign('user_id')
            ->references('id')->on('bio11_users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('frame_id')
            ->references('id')->on('bio11_frames')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });

        Schema::table('bio11_users_colors', function (Blueprint $table) {
            //
            $table->foreign('user_id')
            ->references('id')->on('bio11_users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('color_id')
            ->references('id')->on('bio11_colors')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bio11_users_titles');
        Schema::dropIfExists('bio11_users_frames');
        Schema::dropIfExists('bio11_users_colors');
    }
}
