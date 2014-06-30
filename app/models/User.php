<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $fillable = array('rut', 'password');
	protected $table = 'docentes';
	protected $fillable = array('nombre', 'apellidos','password','email');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	public static function isLogged()
	{
		if(Session::has('user_id'))
			return true;
		else
			return false;
	}

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
		return $this->remember_token;
	}

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}
    
    //este metodo se debe implementar por la interfaz
    // y sirve para obtener la clave al momento de validar el inicio de sesión 

	public function rol_Usuario()
	{
		return $this->belongsTo('Rol_Usuario', 'usuarios_rut');
	}

	public static function insert_docente($nombre, $apellido,$email,$password)
    {
 
        $query = DB::table('docentes')->insert(array(
                 'nombre' => $nombre,
                 'apellido' => $apellido,
                 'email'  => $email,
                 'password' => Hash::make($password),
                 'departamento_nombre' => 'facultad'
        ));
 
        return $query;
 
    } 

	

}
