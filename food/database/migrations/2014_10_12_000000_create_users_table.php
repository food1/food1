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
            $table->increments('id');
            $table->string('user_name')->comment('用户名')->nullable();
            $table->integer('user_phone')->comment('电话')->nullable();
            $table->integer('user_qx')->nullable()->comment('权限')->nullable();
            $table->string('user_password')->comment('密码')->nullable();
            $table->string('user_img')->comment('头像')->nullable();
            $table->string('user_adress')->nullable()->comment('地址')->nullable();
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
