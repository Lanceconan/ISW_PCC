<?php

class StartController extends BaseController {

	protected $layout = 'layouts.master';

	public function Index()
    {
        return $this->layout->content = View::make('login.index');
    }

    public function postLogin()
    {
            if (AuthProfe::attempt( array('rut' => Input::get('rut'), 'contrasena' => Input::get('contrasena') ), true ))
                return Redirect::to('main.index3');
    }

    public function store()
    {
        
    }

    public function loginAdmin()
    {
        if (Auth::check())
        {
            return Redirect::to('/login.login-admin');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return $this->layout->content = View::make('login.login-admin');
    }

    public function validarAdmin()
    {
        // Guardamos en un arreglo los datos del usuario.
        $userdata = array(
            'rut' => Input::get('rut'),
            'contrasena'=> Input::get('contrasena')
        );
        // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
        if(Auth::attempt($userdata, Input::get('remember-me', 0)))
        {
            // De ser datos válidos nos mandara a la bienvenida
            return Redirect::to('/index');
        }
        // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
        return Redirect::to('/admin')
                    ->with('mensaje_error', 'Tus datos son incorrectos')
                    ->withInput();
    }

}

    
