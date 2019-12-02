<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('schedules', function (Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->bigIncrements('id');
			$table->string('type');
			$table->bigInteger('attention_id')->unsigned()->nullable();
			//$table->foreign('attention_id')->references('id')->on('attentions');
			$table->bigInteger('day_id')->unsigned()->nullable();
			//$table->foreign('day_id')->references('id')->on('week_days');
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
		Schema::dropIfExists('schedules');
	}
}
