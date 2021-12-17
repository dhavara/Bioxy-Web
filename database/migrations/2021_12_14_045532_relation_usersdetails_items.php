<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationUsersdetailsItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('bio11_users_details', function (Blueprint $table) {
            //
            $table->foreign('user_color')
            ->references('id')->on('bio11_colors')
            ->onDelete('set null')
            ->onUpdate('set null');

            $table->foreign('user_frame')
            ->references('id')->on('bio11_frames')
            ->onDelete('set null')
            ->onUpdate('set null');

            $table->foreign('user_title')
            ->references('id')->on('bio11_titles')
            ->onDelete('set null')
            ->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
