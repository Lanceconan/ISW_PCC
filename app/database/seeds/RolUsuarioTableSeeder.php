<?php

class RolUsuarioTableSeeder extends Seeder {

	public function run()
	{
		DB::table('roles_usuarios')->delete();
		
		DB::table('roles_usuarios')->insert(array(
                'id' => 1,
				'users_rut' => '18864783',
				'roles_rol' => 'Administrador',
        ));
        
        DB::table('roles_usuarios')->insert(array(
                'id' => 2,
				'users_rut' => '15142427',
				'roles_rol' => 'Director de Departamento',
        ));

        DB::table('roles_usuarios')->insert(array(
                'id' => 3,
				'users_rut' => '20550470',
				'roles_rol' => 'Docente',
        ));

        DB::table('roles_usuarios')->insert(array(
                'id' => 4,
				'users_rut' => '20550471',
				'roles_rol' => 'Usuario Normal',
        ));
	}

}