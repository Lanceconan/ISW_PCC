<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocentesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('docentes', function($table)
		{
			$table->increments('id');
    		$table->integer('deptos_id')->unsigned();
    		$table->foreign('deptos_id')->references('id')->on('deptos')->onDelete('cascade'); 
    		$table->string('nombres');
    		$table->string('apellidos');
    		$table->integer('rut')->unique();
    		$table->timestamp('fecha_nacimiento')->nullable();
    		$table->integer('genero');
    		$table->string('direccion');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('docentes', function(Blueprint $table)
		{
			Schema::drop('docentes');
		});
	}

}
