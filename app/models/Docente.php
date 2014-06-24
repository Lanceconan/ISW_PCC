<?php

/**
 * Modelo de tabla docentes
 *
 */
class Docente extends \Eloquent {

    protected $table = "docentes";
    public $timestamps = false;

    public function cargos() {
        return $this->has_many_and_belongs_to('Cargo');
    }
	
	public function departamentos() {
        return $this->belongs_to('Departamento');
    }
	
	public function cursos() {
        return $this->has_many('Cursos');
    }
}
?>
