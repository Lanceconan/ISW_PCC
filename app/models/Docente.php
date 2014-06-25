<?php

/**
 * Modelo de tabla docentes
 *
 */
class Docente extends \Eloquent {

    protected $table = "docentes";
    public $timestamps = false;

    public function cargos() {
        return $this->belongsToMany('Cargo', 'administrativos', 'docente_fk', 'cargo_fk');
    }
	
	public function departamentos() {
        return $this->belongsTo('Departamento', 'deparamento_fk');
    }
	
	public function cursos() {
        return $this->hasMany('Cursos');
    }
}
?>
