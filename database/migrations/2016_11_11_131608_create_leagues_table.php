<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leagues', function (Blueprint $table) {
            $table->increments('lid');
            $table->integer('uniqid')->comment('联盟ID');
            $table->string('name', 20)->comment('联盟名称');
            $table->string('server_name', 20)->comment('联盟所在服名称');
            $table->string('level')->comment('联盟等级');
            $table->integer('platform', false, true)->comment('联盟所在平台1：android');
            $table->integer('server_no', false, true)->comment('联盟所在服');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('auctions', function (Blueprint $table) {
            $table->increments('aid');
            $table->string('name', 20)->comment('装备名称');
            $table->integer('min_point', false, true)->comment('最低价');
            $table->integer('max_point', false, true)->comment('最高价');
            $table->integer('enable_step', false, true)->comment('启用叫价固定值');
            $table->integer('step_point', false, true)->comment('叫价固定值');
            $table->integer('status', false, true)->comment('状态');
            $table->integer('start_time', false, true)->comment('开始时间');
            $table->integer('end_time', false, true)->comment('结束时间');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('auctions_log', function (Blueprint $table) {
            $table->increments('alid');
            $table->integer('point', false, true)->comment('叫价');
            $table->integer('status', false, true)->comment('状态');
            $table->string('memo', 200)->comment('备注');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('points_log', function (Blueprint $table) {
            $table->increments('plid');
            $table->integer('mid', false, true)->comment('联盟成员ID');
            $table->integer('from_mid', false, true)->comment('来源联盟成员ID');
            $table->integer('type', false, true)->comment('1:每日，2:盟战，3:其他奖励，4:拍卖，5:其他处罚');
            $table->integer('point')->comment('操作贡献值');
            $table->string('memo', 200)->comment('备注');
            $table->softDeletes();
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
        Schema::drop('leagues');
        Schema::drop('auctions');
        Schema::drop('auctions_log');
        Schema::drop('points_log');
    }
}
