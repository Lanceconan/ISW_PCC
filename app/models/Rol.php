<?php

/**
 * Modelo de tabla roles
 *
 */
 
class Rol extends \Eloquent {

    protected $table = "roles";
    public $timestamps = false;

    public function usuarios() {
        return $this->has_many_and_belongs_to('Usuario');
    }
}
?>
