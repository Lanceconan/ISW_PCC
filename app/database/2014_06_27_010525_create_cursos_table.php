<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cursos', function($table)
		{
			$table->increments('id');
    		$table->integer('semestre')->unique();
    		$table->integer('anio')->unique();
    		$table->integer('seccion')->unique();
    		$table->integer('asignaturas_id')->unsigned();
    		$table->foreign('asignaturas_id')->references('id')->on('asignaturas')->onDelete('cascade'); 
    		$table->integer('docentes_id')->unsigned();
    		$table->foreign('docentes_id')->references('id')->on('docentes')->onDelete('cascade'); 
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cursos', function(Blueprint $table)
		{
			Schema::drop('cursos');
		});
	}

}
