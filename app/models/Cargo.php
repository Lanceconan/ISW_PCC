<?php

/**
 * Modelo de tabla cargos
 *
 */
class Cargo extends \Eloquent {

    protected $table = "cargos";
    public $timestamps = false;

    public function docentes() {
        return $this->belongsToMany('Docente', 'administrativos', 'cargo_fk', 'docente_fk');
    }
}
?>
