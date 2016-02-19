<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Achievements extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('achievements', function (Blueprint $table) {
            $table->increments('achievement_id');
            $table->string('name');
            $table->string('description');
            $table->foreign('game_id')->references('game_id')->on('user');
            $table->integer('point_value');
            $table->string('icon_id');
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
        Schema::drop('achievements');
	}

}
