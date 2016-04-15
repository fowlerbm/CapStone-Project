<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Thread extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('thread', function (Blueprint $table) {
            $table->increments('thread_id');
            $table->string('title');
			$table->boolean("comment_thread")->nullable(); //to check if it's for a game comment thread
            $table->boolean('sticky')->nullable();
            $table->boolean('locked')->nullable();
			$table->boolean('hidden')->nullable();
			$table->boolean('flagged')->nullable();
            $table->timestamps();

			$table->integer('game')->nullable(); //some threads wont link to a game, just general thread

			$table->foreign('game')->references('game_id')->on('game');

			//$table->string('posts'); - Not sure what this is for
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('thread');
	}

}
