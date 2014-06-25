<?php

/**
 * Modelo de tabla cursos
 *
 */
class Curso extends \Eloquent {

    protected $table = "cursos";
    public $timestamps = false;

    public function asignaturas() {
        return $this->belongsTo('Asignatura', 'asignatura_fk');
    }
	
	public function docentes() {
        return $this->belongsTo('Docente', 'docente_fk');
    }
	
	public function planificaciones() {
        return $this->hasOne('Planificacion');
    }
}
?>
