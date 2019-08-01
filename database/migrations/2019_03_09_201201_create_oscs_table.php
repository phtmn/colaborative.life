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
			$table->string('nome')->nullable();
			$table->string('numdoc')->nullable();				
			$table->string('telefone')->nullable();
			$table->string('cep')->nullable();
			$table->string('rua', 200)->nullable();
			$table->string('bairro', 200)->nullable();
			$table->string('numero', 50)->nullable();	
			$table->string('cidade', 200)->nullable();
			$table->string('uf', 2)->nullable();
			$table->string('site')->nullable();
            $table->string('facebook')->nullable();
			$table->string('instagram')->nullable();            
			$table->boolean('ativa')->default(0);			
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
