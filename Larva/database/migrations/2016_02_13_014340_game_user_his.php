<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GameUserHis extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('game_user_his', function (Blueprint $table)
            {
                $table->increments('his_id');
                $table->string('user_id');
                $table->string('game_id');
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
        Schema::drop('game_user_fav');
	}

}
