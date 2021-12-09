<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bio11_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('creator'); // user id
            $table->text('table'); // nama tabel
            $table->text('desc'); // deskripsi
            $table->text('path'); // controller path
            $table->text('ip'); // user ip
            $table->timestamps();
        });

        Schema::table('bio11_logs', function (Blueprint $table) {
            //
            $table->foreign('creator')
            ->references('id')->on('bio11_users')
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
        Schema::dropIfExists('logs');
    }
}
