<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCateIdToDianpusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dianpus', function (Blueprint $table) {
            $table->integer('cate_id')->comment('分类ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dianpus', function (Blueprint $table) {
             $table->dropColumn('cate_id');
        });
    }
}
