<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nodes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodes', function (Blueprint $table) {//vip表
            $table->increments('id');
            $table->string('node_name',50)->comment('节点名称');
            $table->string('route_name',50)->nullable()->comment('路由别名');
            $table->integer('pid')->unsigned()->default(0)->comment('上级id');
            $table->enum('is_menu', ['0','1'])->comment('是否是菜单');
            $table->integer('status')->unsigned()->default(0)->comment('是否引用');
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
        //
    }
}
