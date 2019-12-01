<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('temples', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name_temple');
			$table->string('address');
			$table->string('email');
			$table->string('phone');
			$table->string('length');
			$table->string('latitude');
			$table->string('description');
			$table->enum('type', ['capilla', 'iglesia']);
			$table->bigInteger('status_id')->unsigned()->nullable();
			$table->foreign('status_id')->references('id')->on('status_legals');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('temples');
	}
}
