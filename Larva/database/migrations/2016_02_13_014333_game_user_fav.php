<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GameUserFav extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('game_user_fav', function(Blueprint $table)
        {
            $table->increments('fav_id');
            $table->timestamps();
            $table->integer('user_id');
            $table->integer('game_id');

            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('game_id')->references('game_id')->on('game');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('game_user_fav');
	}

}
