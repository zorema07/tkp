<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePdfsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pdfs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('month_id');
			$table->string('month');
			$table->string('name');
			$table->string('directory');
			$table->string('pdf_file');
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
		Schema::drop('pdfs');
	}

}
