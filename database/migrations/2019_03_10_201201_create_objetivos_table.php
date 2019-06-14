<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObjetivosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('objetivos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('numeral');
			$table->text('descricao');
			$table->string('ods_relacionadas', 200)->nullable();
			$table->string('link', 200);
			$table->string('img_p', 200);
			$table->string('img_m', 200);
			$table->string('img_g', 200);
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('objetivos');
	}

}
