<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGaleriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('galerias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('osc_id');
			$table->string('legenda', 200);
			$table->string('aws_url');
			$table->string('aws_name');
			$table->boolean('ativo')->default(1);
			$table->timestamps();
			$table->softDeletes();

            $table->foreign('osc_id')->references('id')->on('oscs');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('galerias');
	}

}
