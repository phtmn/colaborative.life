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
			$table->string('nome_projeto')->nullable();			
			$table->date('data_dou')->nullable();
			$table->string('num_pronac')->nullable();
			$table->string('segmento')->nullable();
			$table->string('tipo_operacao')->nullable();
			$table->text('resumo')->nullable();
			$table->decimal('valor_meta',15,2)->nullable();
			$table->string('link_vesalic')->nullable();			
			$table->string('banco')->nullable();
			$table->string('banco_ag')->nullable();
            $table->string('banco_cc')->nullable();
			$table->boolean('ativo')->default(0);
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
