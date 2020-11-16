<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Broker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('broker', function (Blueprint $table) {//vip表
            $table->increments('id');
            $table->string('name',20)->comment('经纪人名字');
            $table->string('phone',11)->comment('经纪人手机号');
            $table->string('password',20)->comment('登陆密码');
            $table->integer('role_id')->unsigned()->comment('角色id');
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
