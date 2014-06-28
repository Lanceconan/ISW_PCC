<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('facultades', function($table)
		{
			$table->increments('id');
    		$table->string('nombre')->unique();
    		$table->string('descripcion')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('facultades', function(Blueprint $table)
		{
			Schema::drop('facultades');
		});
	}

}
