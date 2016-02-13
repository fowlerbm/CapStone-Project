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
            $table->string('posts');
            $table->string('sticky');
            $table->string('locked');
            $table->string('game');
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
        Schema::drop('thread');
	}

}
