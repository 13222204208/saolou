<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Role extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {//vip表
            $table->increments('id');
            $table->string('role_name',50)->comment('角色名称');
            $table->integer('node_id')->unsigned()->comment('节点id');
            $table->integer('status')->unsigned()->comment('是否引用');
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
