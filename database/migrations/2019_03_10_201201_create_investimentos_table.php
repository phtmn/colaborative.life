<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvestimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('investimentos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->uuid('uuid')->nullable();

			$table->string('tipo_investimento')->nullable();
			$table->unsignedInteger('user_id')->index('user_id');
			$table->unsignedInteger('projeto_id')->nullable()->index('projeto_id');
			$table->unsignedInteger('osc_id')->nullable()->index('osc_id');
			$table->text('descricao')->nullable();
			$table->decimal('valor', 15,2);
			$table->string('status_interno')->nullable();
			$table->string('mp_url')->nullable();
			$table->string('mp_status', 50)->nullable()->index('mp_status');
			$table->string('forma_pagamento', 50)->nullable()->index('forma_pagamento');
			$table->string('mp_codigo', 50)->nullable()->index('mp_codigo');
			$table->string('mp_pagamento', 50)->nullable()->index('mp_pagamento');
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
		Schema::drop('investimentos');
	}

}
