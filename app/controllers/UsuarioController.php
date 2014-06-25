<?php

class UsuarioController extends BaseController {

    public function logout()
    {
        Session::flush();
        return Redirect::to('login.index');
    }
    
}
