<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deptos', function($table)
		{
			$table->increments('id');
    		$table->integer('facultades_id')->unique()->unsigned();
    		$table->foreign('facultades_id')->references('id')->on('facultades')->onDelete('cascade');
    		$table->string('nombre')->unique();
    		$table->text('descripcion');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('deptos', function(Blueprint $table)
		{
			Schema::drop('deptos');
		});
	}

}
