<?php

/**
 * Modelo de tabla carreras
 *
 */
class Carrera extends \Eloquent {

    protected $table = "carreras";
    public $timestamps = false;

    public function escuelas() {
        return $this->belongs_to('Escuela');
    }
	
	public function planificaciones() {
        return $this->has_many('Planificacion');
    }
}
?>
