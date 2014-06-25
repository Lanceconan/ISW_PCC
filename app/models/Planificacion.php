<?php

/**
 * Modelo de tabla planificaciones 
 *
 */
class Planificacion extends \Eloquent {

    protected $table = "planificaciones";
    public $timestamps = false;

    public function semanas() {
        return $this->hasMany('Semana');
    }
	
	public function cursos() {
        return $this->belongsTo('Curso', 'curso_fk'); 
    }
	
	public function carreras() {
        return $this->belongsTo('Carrera', 'carrera_fk'); 
    }
}
?>
