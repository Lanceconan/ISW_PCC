<?php

/**
 * Modelo de tabla asignaturas
 *
 */
class Asignatura extends \Eloquent {

    protected $table = "asignaturas";
    public $timestamps = false;

    public function departamentos() {
        return $this->belongs_to('Departamento');
    }
	
	public function cursos() {
        return $this->has_many('Curso');
    }
}
?>
