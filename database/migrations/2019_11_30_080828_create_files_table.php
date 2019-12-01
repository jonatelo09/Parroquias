<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('files', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name_file');
			$table->string('description_file');
			$table->bigInteger('folder_id')->unsigned()->nullable();
			$table->foreign('folder_id')->refereces('id')->on('folders');
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
		Schema::dropIfExists('files');
	}
}
