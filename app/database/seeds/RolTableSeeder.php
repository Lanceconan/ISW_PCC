<?php

class RolTableSeeder extends Seeder {

	public function run()
	{
		DB::table('roles')->delete();

		DB::table('roles')->insert(array(
                'id' => 1,
				'rol' => 'Usuario Normal',
				'descripcion' => 'Puede buscar en la base de datos las distintas planificaciones que le presentan los docentes.',
        ));

        DB::table('roles')->insert(array(
                'id' => 2,
				'rol' => 'Director de Departamento',
				'descripcion' => 'Posee más atributos que el docente, debido a que puede aprobar las planificaciones de otros docentes dentro de su departamento.',
        ));

        DB::table('roles')->insert(array(
                'id' => 3,
				'rol' => 'Docente',
				'descripcion' => 'Puede crear las planificaciones correspondientes a sus asignaturas.',
        ));

        DB::table('roles')->insert(array(
                'id' => 4,
				'rol' => 'Administrador',
				'descripcion' => 'Administrador, el cual posee la facultad de manejar las cuentas dentro del sistema.',
        ));
	}

}