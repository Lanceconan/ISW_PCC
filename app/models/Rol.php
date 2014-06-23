<?php

/**
 * Description of roles
 *
 */
class Rol extends \Eloquent {

    protected $table = "roles";
    public $LlavePrimaria = 'pk';
    public $rol = 'rol';
    public $descripcion = 'descripcion';
    public $timestamps = false;

    public function usuarios() {
        return $this->has_many_and_belongs_to('Usuario');
    }
}
?>
