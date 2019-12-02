<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignWeekdaysAttentionsToSchedules extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('schedules', function (Blueprint $table) {
			$table->foreign('attention_id')->references('id')->on('attentions');
			$table->foreign('day_id')->references('id')->on('week_days');
			$table->foreign('temple_id')->references('id')->on('temples');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('schedules', function (Blueprint $table) {
			//
		});
	}
}
