<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToTemples extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('temples', function (Blueprint $table) {
			$table->foreign('status_id')->references('id')->on('status_legals');
			$table->bigInteger('manager_id')->unsigned()->nullable();
			$table->foreign('manager_id')->references('id')->on('managers');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('temples', function (Blueprint $table) {
			//
		});
	}
}
