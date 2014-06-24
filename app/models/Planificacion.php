<?php

/**
 * Modelo de tabla planificaciones 
 *
 */
class Planificacion extends \Eloquent {

    protected $table = "planificaciones";
    public $timestamps = false;

    public function semanas() {
        return $this->has_many('Semana', ''); //pendiente
    }
	
	public function cursos() {
        return $this->belongs_to('Curso', ''); //pendiente
    }
	
	public function carreras() {
        return $this->belongs_to('Carrera', ''); //pendiente
    }
}
?>
