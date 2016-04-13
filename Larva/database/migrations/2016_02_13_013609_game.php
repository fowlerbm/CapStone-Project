<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Game extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('game', function(Blueprint $table)
        {
            $table->increments('game_id');
            $table->string('title');
            $table->string('description');
            $table->string('image_path');
            $table->string('file_Location');
            $table->timestamps();

            $table->integer('author_id');
            $table->integer('tags');
            $table->integer('rating');
            $table->integer('comment_thread');

            $table->foreign('rating')->references('rating')->on('game_user_rating');
            $table->foreign('comment_thread')->references('thread_id')->on('thread');
            $table->foreign('author_id')->references('user_id')->on('user');
            $table->foreign('tags')->references('tag_id')->on('tags');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('game');
	}

}
