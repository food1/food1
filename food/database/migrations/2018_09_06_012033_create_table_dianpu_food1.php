<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDianpuFood1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dianpu_food1', function (Blueprint $table) {
            $table->integer('dianpu_id')->comment('店铺ID');
            $table->integer('food1_id')->comment('餐品ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dianpu_food1');
    }
}
