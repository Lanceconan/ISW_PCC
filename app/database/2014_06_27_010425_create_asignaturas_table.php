<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asignaturas', function($table)
		{
			$table->increments('id');
    		$table->integer('deptos_id')->unique()->unsigned();
    		$table->foreign('deptos_id')->references('id')->on('deptos')->onDelete('cascade'); 
    		$table->string('codigo')->unique()->unsigned();
    		$table->string('nombre');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('asignaturas', function(Blueprint $table)
		{
			Schema::drop('asignaturas');
		});
	}

}
