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
            $table->integer('achievement_Score')->nullable();
            $table->boolean('admin')->nullable();
			$table->string('about_me')->nullable();
			$table->rememberToken();
			$table->timestamps();

            $table->integer('favorite_game')->nullable();
            $table->integer('game_history')->nullable();
			$table->integer('icon')->nullable();

            $table->foreign('favorite_game')->references('fav_id')->on('game_user_fav');
            $table->foreign('game_history')->references('his_id')->on('game_user_his');
			$table->foreign('icon')->references('icon_id')->on('icons');


			//$table->integer('posts')->nullable(); - Not sure what this field represents
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