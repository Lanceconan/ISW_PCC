<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolusuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rol_usuario', function($table)
		{
			$table->increments('id');
    		$table->integer('users_id')->unique()->unsigned();
    		$table->foreign('users_id')->references('id')->on('users')->onDelete('cascade'); 
    		$table->integer('rol_id')->unique();
    		$table->foreign('rol_id')->references('id')->on('rol')->onDelete('cascade'); 
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rol_usuario', function(Blueprint $table)
		{
			Schema::drop('rol_usuario');
		});
	}

}
