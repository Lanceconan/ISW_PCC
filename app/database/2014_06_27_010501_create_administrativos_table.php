<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrativosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admins', function($table)
		{
			$table->increments('id');
    		$table->integer('cargos_id')->unique()->unsigned();
    		$table->foreign('cargos_id')->references('id')->on('cargos')->onDelete('cascade'); 
    		$table->integer('docentes_id')->unique()->unsigned();
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
		Schema::table('admins', function(Blueprint $table)
		{
			Schema::drop('admins');
		});
	}

}
