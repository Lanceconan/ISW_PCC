<?php

/**
 * Modelo de tabla semanas
 *
 */
class Semana extends \Eloquent {

    protected $table = "semanas";
    public $timestamps = false;

    public function planificaciones() {
        return $this->belongsTo('Planificacion', 'planificacion_fk'); 
    }
}
?>
