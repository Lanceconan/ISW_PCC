<?php

class LoginController extends \BaseController {

	protected $layout = 'layouts.master';

	public function loginAdmin()
    {
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return $this->layout->content = View::make('login.login-admin');
    }

    public function validarAdmin()
    {
        // Guardamos en un arreglo los datos del usuario.
        $input = Input::all();
        $rules = array('rut'=>'required', 'password' => 'required');
        $v = Validator::make($input, $rules);

        if($v->fails())
        {
            return Redirect::to('/')->withErrors($v);
        }
        else{

            $credentials = array('rut'=>$input['rut'], 'password'=>$input['password']);
            if (Auth::attempt($credentials)) {
                // Redirect to homepage
                return Redirect::action('AdminController@getIndex');
            } else {
                // Redirect to the login page.
                return Redirect::back()->with('msg', 'Datos no válidos');
            }
        }
        }
        
        public function loginComun()
    {
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return $this->layout->content = View::make('login.login-comun');
    }

    public function validarComun()
    {
        // Guardamos en un arreglo los datos del usuario.
        $input = Input::all();
        $rules = array('rut'=>'required', 'password' => 'required');
        $v = Validator::make($input, $rules);

        if($v->fails())
        {
            return Redirect::to('/')->withErrors($v);
        }
        else{

            $credentials = array('rut'=>$input['rut'], 'password'=>$input['password']);
            if (Auth::attempt($credentials)) {
                // Redirect to homepage
                return Redirect::action('AdminController@getIndex');
            } else {
                // Redirect to the login page.
                return Redirect::back()->with('msg', 'Datos no válidos');
            }
        }
        }

        public function loginProfe()
    {
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return $this->layout->content = View::make('login.login-profe');
    }

    public function validarProfe()
    {
        // Guardamos en un arreglo los datos del usuario.
        $input = Input::all();
        $rules = array('rut'=>'required', 'password' => 'required');
        $v = Validator::make($input, $rules);

        if($v->fails())
        {
            return Redirect::to('/')->withErrors($v);
        }
        else{

            $credentials = array('rut'=>$input['rut'], 'password'=>$input['password']);
            if (Auth::attempt($credentials)) {
                // Redirect to homepage
                return Redirect::action('AdminController@getIndex');
            } else {
                // Redirect to the login page.
                return Redirect::back()->with('msg', 'Datos no válidos');
            }
        }
        }
}