<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bio11_users_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('difficulty');
            $table->integer('point');
            $table->integer('accuracy');
            $table->integer('total_correct');
            $table->integer('total_question');
            $table->timestamps();
        });

        Schema::table('bio11_users_histories', function (Blueprint $table) {
            //
            $table->foreign('user_id')
            ->references('id')->on('bio11_users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });

        Schema::table('bio11_users_histories', function (Blueprint $table) {
            //
            $table->foreign('difficulty')
            ->references('id')->on('bio11_difficulties')
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
        Schema::dropIfExists('histories');
    }
}
