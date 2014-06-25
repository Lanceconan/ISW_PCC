<?php

/**
 * Modelo de tabla facultades
 *
 */
class Facultad extends \Eloquent {

    protected $table = "facultades";
    public $timestamps = false;

    public function departamentos() {
        return $this->hasMany('Departamento');
    }
}
?>
