<?php

/**
 * Modelo de tabla asignaturas
 *
 */
class Asignatura extends \Eloquent {

    protected $table = "asignaturas";
    public $timestamps = false;

    public function departamentos() {
        return $this->belongsTo('Departamento', 'departamento_fk');
    }
	
	public function cursos() {
        return $this->hasMany('Curso');
    }
}
?>
