<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RolesUsuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roles_usuarios', function($table)
		{
			$table->increments('id');
    		$table->string('users_rut')->unique()->unsigned();
    		$table->foreign('users_rut')->references('rut')->on('users')->onDelete('cascade'); 
    		$table->string('roles_rol')->unique();
    		$table->foreign('roles_rol')->references('rol')->on('roles')->onDelete('cascade'); 
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('roles_usuarios', function(Blueprint $table)
		{
			Schema::drop('roles_usuarios');
		});
	}

}

