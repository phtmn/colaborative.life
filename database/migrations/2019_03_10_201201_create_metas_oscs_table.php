<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMetasOscsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('metas_oscs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('osc_id')->nullable();
			$table->integer('projeto_id')->nullable();
			$table->integer('meta_id');
			$table->integer('objetivo_id');
			$table->string('meta_codigo', 50);
			$table->text('meta_descricao');
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
		Schema::drop('metas_oscs');
	}

}
