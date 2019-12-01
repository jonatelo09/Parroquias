<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagePropsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('image_props', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('img');
			$table->bigInteger('prop_id')->unsigned()->nullable();
			$table->foreign('prop_id')->references('id')->on('props');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('image_props');
	}
}
