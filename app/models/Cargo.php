<?php

/**
 * Modelo de tabla cargos
 *
 */
class Cargo extends \Eloquent {

    protected $table = "cargos";
    public $timestamps = false;

    public function docentes() {
        return $this->has_many_and_belongs_to('Docente');
    }
}
?>
