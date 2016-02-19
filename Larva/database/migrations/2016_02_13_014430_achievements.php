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
            $table->integer('point_value');
            $table->string('icon_id');
            $table->timestamps();
            $table->integer('game_id');

            $table->foreign('game_id')->references('game_id')->on('user');
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
