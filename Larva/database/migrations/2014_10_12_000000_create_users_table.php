<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('user_id');
			$table->string('username')->unique();
			$table->string('email')->unique();
			$table->string('password', 60);
            $table->string('icon_id')->nullable();
            $table->integer('achievement_Score')->nullable();
            $table->integer('posts')->nullable();
            $table->boolean('admin')->nullable();
			$table->rememberToken();
			$table->timestamps();
            $table->integer('favorite_game')->nullable();
            $table->integer('game_history')->nullable();

            $table->foreign('favorite_game')->references('fav_id')->on('game_user_fav');
            $table->foreign('game_history')->references('his_id')->on('game_user_his');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
