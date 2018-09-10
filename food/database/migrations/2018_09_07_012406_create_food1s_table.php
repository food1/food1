<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFood1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('food1_name')->comment('餐品名');
            $table->text('food1_intro')->comment('餐品描述');
            $table->string('food1_img')->comment('餐品照片');
            $table->string('food1_price')->comment('餐品单价');
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
        Schema::dropIfExists('food1s');
    }
}
