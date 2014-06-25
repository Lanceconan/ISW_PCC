<?php

/**
* Modelo de tabla usuarios
*
*/
class Usuario extends \Eloquent {

    protected $table = "usuarios";
    public $llaveprimaria = 'pk';
    public $timestamps = false;

    public function roles() {
        return $this->belongsToMany('Rol', 'roles_usuarios', 'usuario_fk', 'rol_fk');
    }

}
