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
			$table->string('num_doc')->nullable();		
            $table->string('telefone')->nullable(); 						
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
