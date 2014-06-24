<?php

/**
 * Modelo de tabla semanas
 *
 */
class Semana extends \Eloquent {

    protected $table = "semanas";
    public $timestamps = false;

    public function planificaciones() {
        return $this->belongs_to('Planificacion'); //pendiente
    }
}
?>
