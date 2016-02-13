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
            $table->string('author_id');
            $table->string('tags');
            $table->string('created_on');
            $table->string('updated_on');
            $table->string('rating');
            $table->string('Comment_thread');
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
        Schema::drop('game');
	}

}
