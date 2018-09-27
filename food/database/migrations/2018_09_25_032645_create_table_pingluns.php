<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePingluns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pingluns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pid');
            $table->string('nickname',191)->nullable();
            $table->integer('support')->nullable();
            $table->datetime('like_time')->nullable();
            $table->text('content')->nullable(); 
            $table->integer('attitude')->nullable();
            $table->datetime('create_time')->nullable();
            $table->string('ip',45)->nullable();
            $table->text('likeIPs')->nullable();
            $table->integer('display');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pingluns');
    }
}
