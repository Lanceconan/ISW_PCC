<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemanasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('semanas', function($table)
		{
    		$table->increments('id');
    		$table->integer('planificaciones_id')->unique()->unsigned();
    		$table->foreign('planificaciones_id')->references('id')->on('planificaciones')->onDelete('cascade'); 
    		$table->integer('semana');
    		$table->integer('semana_anio');
    		$table->string('unidad');
    		$table->string('objetivos_especificos')->nullable();
    		$table->string('contenidos_tematicos')->nullable();
    		$table->string('evaluaciones')->nullable();
    		$table->timestamps();
	});
	}
	public function down()
	{
		Schema::table('semanas', function(Blueprint $table)
		{
			Schema::drop('semanas');
		});
	}

}
