<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTemplesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('users_temples', function (Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->bigIncrements('id');
			$table->bigInteger('user_id')->unsigned()->nullable();
			//$table->foreign('user_id')->references('id')->on('users');
			$table->bigInteger('temple_id')->unsigned()->nullable();
			//$table->foreign('temple_id')->references('id')->on('temples');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('users_temples');
	}
}
