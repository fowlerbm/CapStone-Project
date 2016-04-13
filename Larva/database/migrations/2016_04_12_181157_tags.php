<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tags extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tags', function (Blueprint $table)
		{
			$table->increments('tag_id');
			$table->string('name');
			$table->timestamps();
		});

		Schema::create('game_tags', function (Blueprint $table)
		{
			$table->integer('game_id');
			$table->integer('tag_id');

			$table->foreign('tag_id')->references('tag_id')->on('tags');
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
		Schema::drop('tags');
		Schema::drop('game_tags');
	}

}
