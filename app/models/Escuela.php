<?php

/**
 * Modelo de tabla escuelas
 *
 */
class Escuela extends \Eloquent {

    protected $table = "escuelas";
    public $timestamps = false;

    public function departamentos() {
        return $this->belongsTo('Departamento', 'departamento_fk');
    }
	
	public function carreras() {
        return $this->hasMany('Carrera');
    }
}
?>
