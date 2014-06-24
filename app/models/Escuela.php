<?php

/**
 * Modelo de tabla escuelas
 *
 */
class Escuela extends \Eloquent {

    protected $table = "escuelas";
    public $timestamps = false;

    public function departamentos() {
        return $this->belongs_to('Departamento');
    }
	
	public function carreras() {
        return $this->has_many('Carrera');
    }
}
?>
