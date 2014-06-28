<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanificacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('planificaciones', function($table)
		{
    		$table->increments('id');
    		$table->integer('carreras_id')->unique()->unsigned();
    		$table->foreign('carreras_id')->references('id')->on('carreras')->onDelete('cascade'); 
    		$table->integer('cursos_id')->unique()->unsigned();
    		$table->foreign('cursos_id')->references('id')->on('cursos')->onDelete('cascade'); 
    		$table->string('estrategias')->nullable();
    		$table->timestamps();
    		$table->string('objetivos')->nullable();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('planificaciones', function(Blueprint $table)
		{
			Schema::drop('planificaciones');
		});
	}

}
