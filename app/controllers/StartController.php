<?php

class StartController extends BaseController {

	protected $layout = 'layouts.master';

	public function Index()
    {
        return $this->layout->content = View::make('login.index');
    }

    public function postLogin()
    {
            if (Auth::attempt( array('rut' => Input::get('rut'), 'contrasena' => Input::get('contrasena') ), true ))
                return Redirect::to('main.index3');
    }

    public function store()
    {
        
    }

}

    
