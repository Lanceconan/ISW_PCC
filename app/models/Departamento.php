<?php

/**
 * Modelo de tabla departamentos
 *
 */
class Departamento extends \Eloquent {

    protected $table = "departamento";
    public $timestamps = false;

    public function asignaturas() {
        return $this->has_many('Asignatura');
    }
	
	public function docentes() {
        return $this->has_many('Docente');
    }
	
	public function facultades() {
        return $this->belongs_to('Facultad');
    }
	
	public function escuela() {
        return $this->has_many('Escuela');
    }
}
?>
