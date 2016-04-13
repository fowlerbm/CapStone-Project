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
            $table->timestamps();

            $table->integer('game_id');
			$table->integer('icon');

            $table->foreign('game_id')->references('game_id')->on('user');
			$table->foreign('icon')->references('icon_id')->on('icons');
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
