<?php

class RegisterController extends BaseController {

	protected $layout = 'layouts.master';

	public function getIndex()
	{
		return $this->layout->content = View::make('inscripcion.inscripcion');
	}

	public function postIndex()
	{
        $nombre = e(Input::get('nombre'));
        $apellido = e(Input::get('apellido'));
        $password = e(Input::get('password'));
        $email = e(Input::get('email'));
        $pass1 = e(Input::get('password2'));

        if($password!=$pass1)
        {
            return Redirect::to('registrar')->withErrors($password)->withInput();
        }
        else
        {

 
        //creamos un array con las reglas que deben cumplir nuestro formulario
        $rules = array(
            'email' => 'required|email|min:6|max:100|unique:usuarios',
            'password' => 'required|min:6|max:100'
        );
 
        //personalizamos los mensajes de error para nuestro formualario
        $messages = array(
            'required' => 'El campo :attribute es obligatorio.',
            'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
            'email' => 'El campo :attribute debe ser un email válido.',
            'max' => 'El campo :attribute no puede tener más de :min carácteres.',
            'unique' => 'El email ingresado ya existe en la base de datos'
        );
 
        //validation necesita los campos, las reglas y opcionalmente los mensajes,
        //si no le pasamos los mensajes los pondrá en inglés, que son los que vienen
        //por defecto con laravel
        $validation = Validator::make(Input::all(), $rules, $messages);
 
        //si la validación falla redirigimos a formularios con los errores
        //y los campos que haya ingresado el usuario para que queden grabados
        if ($validation->fails())
        {
 
            return Redirect::to('registrar')->withErrors($validation)->withInput();
 
        //en otro caso llamamos al método insert_users de la clase usuarios para
        //ingresar al usuario en la tabla usuarios
        }else{
 
            //hacemos uso del método estático que hemos creado llamado insert users
            //del modelo usuarios, así de fácil
            $insert = User::insert_docente($nombre, $apellido,$email,$password);
 
            //si se realiza correctamente la inserción envíamos un mensaje de tipo flash
            //que sólo estará disponible una vez
            if($insert)
            {
 
                return Redirect::to('registrar')->with('mensaje','¡Usuario registrado correctamente!.');
 
            }
	}


}

}

}
