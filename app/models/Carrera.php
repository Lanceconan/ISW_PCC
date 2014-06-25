<?php

/**
 * Modelo de tabla carreras
 *
 */
class Carrera extends \Eloquent {

    protected $table = "carreras";
    public $timestamps = false;

    public function escuelas() {
        return $this->belongsTo('Escuela', 'escuela_fk');
    }
	
	public function planificaciones() {
        return $this->hasMany('Planificacion');
    }
}
?>
