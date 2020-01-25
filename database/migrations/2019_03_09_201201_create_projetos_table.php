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
			$table->unsignedInteger('user_id');
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
			$table->string('comprovante_captacao', 100)->nullable();
			$table->string('imagem_projeto', 100)->nullable();			
			$table->string('cronograma', 100)->nullable();
			// $table->string('orcamento', 100)->nullable();
			$table->string('contrapartidas', 100)->nullable();	
			$table->string('nome', 200)->nullable();
			$table->string('proponente_responsavel', 200)->nullable(); // responsavel
			$table->string('cpf-or-cnpj', 11)->nullable();
			$table->string('segmento', 50)->nullable();
			$table->string('area', 50)->nullable();
			$table->string('mecanismo', 50)->nullable();
			$table->string('enquadramento', 50)->nullable();
			$table->string('municipio_projeto', 200)->nullable(); // municipio
			$table->string('uf_projeto', 2)->nullable();
			$table->string('ano_projeto', 10)->nullable();
			$table->string('data_termino', 50)->nullable();
			$table->string('data_inicio', 50)->nullable();
			$table->string('valor_proposta', 50)->nullable();
			$table->string('valor_aprovado', 50)->nullable();
			$table->string('valor_solicitado', 50)->nullable();
			$table->string('outras_fontes', 50)->nullable();
			$table->string('valor_captado', 50)->nullable();
			$table->string('valor_projeto', 50)->nullable();
			$table->text('resumo')->nullable();		
			$table->text('etapa')->nullable();		
			$table->text('objetivos')->nullable();		
			$table->text('sinopse')->nullable();		
			$table->text('justificativa')->nullable();		
			$table->text('ficha_tecnica')->nullable();		
			$table->text('especificacao_tecnica')->nullable();		
			$table->text('impacto_ambiental')->nullable();		
			$table->text('democratizacao')->nullable();		
			$table->text('acessibilidade')->nullable();			
			$table->boolean('ativo')->default(0);
			$table->boolean('publicado')->default(0);
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
		Schema::drop('projetos');
	}

}
