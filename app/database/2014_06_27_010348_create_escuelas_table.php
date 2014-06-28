<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscuelasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('escuelas', function($table)
		{
			$table->increments('id');
    		$table->integer('deptos_id')->unsigned();
    		$table->foreign('deptos_id')->references('id')->on('deptos')->onDelete('cascade'); 
    		$table->string('nombre')->unique(); 
    		$table->string('descripcion')->nullable;
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('escuelas', function(Blueprint $table)
		{
			Schema::drop('escuelas');
		});
	}

}
