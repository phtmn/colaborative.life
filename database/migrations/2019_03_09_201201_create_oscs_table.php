<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOscsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oscs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('user_id');
			$table->uuid('uuid')->nullable();			
			$table->string('num_doc')->nullable();		
            $table->string('telefone')->nullable();           
			$table->string('cep')->nullable();
			$table->string('logradouro', 200)->nullable();
			$table->string('bairro', 200)->nullable();		
			$table->string('cidade', 200)->nullable();
			$table->string('uf', 2)->nullable();
			$table->boolean('ativa')->default(1);
			$table->string('logo', 200)->nullable();
			$table->timestamps();
			$table->softDeletes();

			$table->foreign('user_id')->references('id')->on('users');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oscs');
	}

}
