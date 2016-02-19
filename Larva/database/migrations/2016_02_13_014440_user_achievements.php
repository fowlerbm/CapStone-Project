<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserAchievements extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('user_achievements', function (Blueprint $table) {
            $table->increments('userAch_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('achievement_id')->references('achievement_id')->on('achievements');
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
        Schema::drop('user_achievements');
	}

}
