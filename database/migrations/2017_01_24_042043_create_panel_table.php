<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('panel',function(Blueprint $table){
            $table->increments('id');
            $table->integer('pid');
            $table->string('name');
            $table->string('link');     //控制器路径
            $table->integer('type'); //0表示标题1表示动作
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
