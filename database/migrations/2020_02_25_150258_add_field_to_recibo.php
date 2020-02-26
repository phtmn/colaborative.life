<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToRecibo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recibos', function (Blueprint $table) {
            $table->string('num_recibo')->nullable();
            $table->string('segmento_cultural')->nullable();
            $table->enum('tipo_operacao',['Art.26 - [doação]','Art.26 - [patrocínio]','Art.18 - [doação]','Art.18 - [patrocínio]']);
            $table->string('valor_incentivo')->nullable();
            $table->string('banco')->nullable();
            $table->string('ag')->nullable();
            $table->string('cc')->nullable();
            $table->dateTime('data_incentivo')->nullable();
            $table->enum('forma_incentivo',['Bens','Serviços']);
            $table->text('especificacao_doacao_patrocinio')->nullable();
            $table->text('forma_avaliacao_doacao_patrocinio')->nullable();
            $table->string('incentivador_nome')->nullable();
            $table->string('incentivador_cpf_cnpj')->nullable();
            $table->string('incentivador_cep')->nullable();
            $table->string('incentivador_logradouro')->nullable();
            $table->string('incentivador_bairro')->nullable();
            $table->string('incentivador_cidade')->nullable();
            $table->string('incentivador_uf')->nullable();
            $table->string('incentivador_telefone')->nullable();
            $table->enum('incentivador_tipo_telefone',['Empresa [pública]','Empresa [privada]']);
            $table->string('incentivador_grupo_empresarial')->nullable();
            $table->string('incentivador_nome_dirigente')->nullable();
            $table->string('declarador_nome')->nullable();
            $table->string('declarador_cpf')->nullable();
            $table->string('declarador_telefone')->nullable();
            $table->string('declarador_cargo')->nullable();
            $table->string('declarador_local')->nullable();
            $table->dateTime('declarador_data')->nullable();
            $table->string('projeto_nome')->nullable();
            $table->dateTime('projeto_data')->nullable();
            $table->string('projeto_responsavel')->nullable();
            $table->string('projeto_telefone')->nullable();
            $table->string('projeto_cep')->nullable();
            $table->string('projeto_logradouro')->nullable();
            $table->string('projeto_bairro')->nullable();
            $table->string('projeto_cidade')->nullable();
            $table->string('projeto_uf')->nullable();
            $table->unsignedInteger('user_id')->nullable();
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
        Schema::table('recibos', function (Blueprint $table) {
            //
        });
    }
}
