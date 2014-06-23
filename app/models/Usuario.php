<?php

/**
 * Description of usuarios
 *
 */
class Usuario extends \Eloquent {

    protected $table = "usuarios";
    public $llaveprimaria = 'pk';
    public $timestamps = false;

    public function roles() {
        return $this->has_many_and_belongs_to('Rol');
    }

}
?>
