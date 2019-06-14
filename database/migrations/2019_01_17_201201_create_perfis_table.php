<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePerfisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('perfis', function(Blueprint $table)
		{
			$table->increments('id', true);
			$table->unsignedInteger('user_id');
            $table->string('nome_completo', 100)->nullable()->index('nome');
            $table->date('dt_nascimento')->nullable();
            $table->string('genero', 10)->nullable();
            $table->string('cpf_cnpj', 50)->nullable();
            $table->string('razao_social', 100)->nullable();
            $table->string('nome_fantasia', 100)->nullable();
            $table->string('qtd_funcionarios')->nullable();
            $table->string('faturamento_mensal')->nullable();
            $table->string('cargo')->nullable();
            $table->string('cep')->nullable();
            $table->string('logradouro', 200)->nullable();
            $table->string('numero', 50)->nullable();
            $table->string('complemento', 200)->nullable();
            $table->string('bairro', 200)->nullable();
            $table->string('cidade', 200)->nullable();
            $table->string('uf', 2)->nullable();
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->text('avatar')->nullable();
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
		Schema::drop('perfis');
	}

}
