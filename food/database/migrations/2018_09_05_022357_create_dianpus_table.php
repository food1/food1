<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDianpusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dianpus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dianpu_name')->comment('店铺名称');
            $table->text('dianpu_intro')->comment('店铺描述');
            $table->text('dianpu_adress')->comment('小店地址');
            $table->string('dianpu_img')->comment('小店图片');
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
        Schema::dropIfExists('dianpus');
    }
}
