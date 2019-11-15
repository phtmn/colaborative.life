<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjetosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projetos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->uuid('uuid')->nullable();
			$table->unsignedInteger('osc_id');
			$table->string('num_pronac')->nullable();
			$table->string('telefone')->nullable();           
			$table->string('cep')->nullable();
			$table->string('logradouro', 200)->nullable();
			$table->string('bairro', 200)->nullable();		
			$table->string('cidade', 200)->nullable();
			$table->string('uf', 2)->nullable();			
			$table->string('banco')->nullable();
			$table->string('ag')->nullable();
            $table->string('cc')->nullable();
			$table->boolean('ativo')->default(0);
			$table->boolean('publicado')->default(0);
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
		Schema::drop('projetos');
	}

}
