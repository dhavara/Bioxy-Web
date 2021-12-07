<?php

use App\Models\UserDetail;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bio11_users_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('user_image')->nullable(true);
            $table->string('point')->default(0);
            $table->unsignedBigInteger('user_color')->nullable(true);
            $table->unsignedBigInteger('user_frame')->nullable(true);
            $table->unsignedBigInteger('user_title')->nullable(true);
            $table->enum('is_login', ['0', '1'])->default('0');
            $table->enum('is_active', ['0', '1'])->default('1');
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
        Schema::dropIfExists('users_details');
    }
}
