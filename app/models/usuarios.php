<?php

/**
 * Description of usuarios
 *
 */
class usuarios extends \Eloquent {

    protected $table = "usuarios";
    public $llaveprimaria = 'pk';
    public $rut = 'rut';
    public $contrasena = 'contrasena';

    //public function usuario() {
        //return $this->hasOne('Usuario', 'usuario_fk');
    //}

}

?>
