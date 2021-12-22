<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalsdifficultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bio11_soals_difficulties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('soal_id');
            $table->unsignedBigInteger('difficulty_id');
            $table->timestamps();
        });
        Schema::table('bio11_soals_difficulties', function (Blueprint $table) {
            //
            $table->foreign('soal_id')
            ->references('id')->on('bio11_soals')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('difficulty_id')
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
        Schema::dropIfExists('soalsdifficulties');
    }
}
