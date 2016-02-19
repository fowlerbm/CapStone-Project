<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('post_id');
            $table->foreign('thread_id')->references('thread_id')->on('thread');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->string('content');
            $table->string('flagged');
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
        Schema::drop('posts');
	}

}
