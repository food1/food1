<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopcarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopcars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->comment('用户id');
            $table->string('food1_id')->comment('餐品id');
            $table->string('shuliang')->comment('数量')->default(1);
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
        Schema::dropIfExists('shopcars');
    }
}
