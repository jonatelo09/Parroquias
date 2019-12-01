<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('props', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name_props');
			$table->string('description_props');
			$table->integer('quantity');
			$table->boolean('is_reliquia');
			$table->float('price');
			$table->bigInteger('category_id')->unsigned()->nullable();
			$table->foreign('category_id')->references('id')->on('categories');
			$table->bigInteger('temple_id')->unsigned()->nullable();
			$table->foreign('temple_id')->references('id')->on('temples');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('props');
	}
}
