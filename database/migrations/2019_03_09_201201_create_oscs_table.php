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

			$table->string('nome_fantasia')->nullable();
			$table->string('cnpj')->nullable();
			$table->string('ano_fundacao')->nullable();
			$table->string('sigla')->nullable();
			$table->json('cnaes')->nullable();
			$table->string('responsavel')->nullable();

			$table->string('email' )->nullable();
            $table->string('telefone')->nullable();
            $table->string('site')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('video_institucional')->nullable();
            $table->text('mapa')->nullable();

			$table->string('cep')->nullable();
			$table->string('logradouro', 200)->nullable();
			$table->string('numero', 50)->nullable();
			$table->string('bairro', 200)->nullable();
			$table->string('complemento', 200)->nullable();
			$table->string('cidade', 200)->nullable();
			$table->string('uf', 2)->nullable();
            $table->string('situacao_imovel')->nullable();

            $table->string('banco_investimentos')->nullable();
            $table->string('agencia_investimentos')->nullable();
            $table->string('conta_investimentos')->nullable();
            $table->string('op_investimentos')->nullable();

			$table->text('historia')->nullable();
			$table->text('objetivos')->nullable();
			$table->text('impactos')->nullable();
			$table->text('missao')->nullable();
			$table->text('visao')->nullable();
			$table->text('valores')->nullable();
			$table->text('espaco_livre')->nullable();

			$table->boolean('ativa')->default(0);
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
