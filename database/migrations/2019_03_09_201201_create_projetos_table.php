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
			$table->text('descricao_resumida')->nullable();
			$table->string('responsavel_projeto')->nullable();
			$table->decimal('valor_projeto',15,2)->nullable();
			$table->decimal('valor_meta',15,2)->nullable();
			$table->text('imagem' )->nullable();
			$table->date('data_inicio')->nullable();
			$table->date('data_final')->nullable();

			$table->boolean('lei_incentivo')->default(0);
			$table->string('lei')->nullable();
			$table->string('ambito')->nullable();
            $table->string('artigo')->nullable();
			$table->string('num_registro1')->nullable();
			$table->string('num_registro2')->nullable();
            $table->string('segmento')->nullable();

			$table->text('resumo')->nullable();
			$table->text('objetivos')->nullable();
			$table->text('justificativa')->nullable();
			$table->text('publico_alvo')->nullable();
			$table->text('impactos_esperados')->nullable();
			$table->text('contra_partidas')->nullable();

			$table->string('prop_nome', 100)->nullable();
			$table->string('prop_documento', 20)->nullable();
			$table->string('prop_telefone1', 20)->nullable();
			$table->string('prop_telefone2', 20)->nullable();
			$table->string('prop_email1', 200)->nullable();
			$table->string('prop_email2', 200)->nullable();


            $table->string('banco_doacao')->nullable();
            $table->string('agencia_doacao')->nullable();
            $table->string('conta_doacao')->nullable();
            $table->string('op_doacao')->nullable();

            $table->string('banco_patrocinio')->nullable();
            $table->string('agencia_patrocinio')->nullable();
            $table->string('conta_patrocinio')->nullable();
            $table->string('op_patrocinio')->nullable();

			$table->string('status')->default('enviado');
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
