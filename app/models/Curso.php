<?php

/**
 * Modelo de tabla cursos
 *
 */
class Curso extends \Eloquent {

    protected $table = "cursos";
    public $timestamps = false;

    public function asignaturas() {
        return $this->belongs_to('Asignatura');
    }
	
	public function docentes() {
        return $this->belongs_to('Docente');
    }
	
	public function planificaciones() {
        return $this->has_one('Planificacion');
    }
}
?>
