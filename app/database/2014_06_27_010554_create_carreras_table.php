<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrerasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carreras', function($table)
		{
			$table->increments('id');
    		$table->integer('codigo')->unique();
    		$table->string('nombre');
    		$table->integer('escuelas_id')->unique()->unsigned();
    		$table->foreign('escuelas_id')->references('id')->on('escuelas')->onDelete('cascade'); 
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('carreras', function(Blueprint $table)
		{
			Schema::drop('carreras');
		});
	}

}
