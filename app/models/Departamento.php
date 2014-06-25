<?php

/**
 * Modelo de tabla departamentos
 *
 */
class Departamento extends \Eloquent {

    protected $table = "departamento";
    public $timestamps = false;

    public function asignaturas() {
        return $this->hasMany('Asignatura');
    }
	
	public function docentes() {
        return $this->hasMany('Docente');
    }
	
	public function facultades() {
        return $this->belongsTo('Facultad', 'facultad_fk');
    }
	
	public function escuela() {
        return $this->hasMany('Escuela');
    }
}
?>
