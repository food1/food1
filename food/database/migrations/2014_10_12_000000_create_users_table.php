<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_name');
            $table->integer('user_phone');
            $table->string('user_password');
            $table->string('user_img');
            $table->string('user_adress');
            $table->increments('id');
            $table->string('user_name')->comment('用户名');
            $table->integer('user_phone')->comment('电话');
            $table->string('user_password')->comment('密码');
            $table->string('user_img')->comment('头像');
            $table->string('user_adress')->nullable()->comment('地址');
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
        Schema::dropIfExists('users');
    }
}
