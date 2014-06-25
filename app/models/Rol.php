<?php

/**
 * Modelo de tabla roles
 *
 */
class Rol extends \Eloquent {

    protected $table = "roles";
    public $timestamps = false;

    public function usuarios() {
        return $this->belongsToMany('Usuario', 'roles_usuarios', 'rol_fk', 'usuario_fk');
    }
}
?>
