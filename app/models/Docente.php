<?php

class Docente extends eloquent
{
	public $timestamp=False;
	protected $table = 'docentes';
	protected $fillable = array('nombre', 'apellidos','password','email');
	protected $hidden = array('password');

	public function administrativos()
	{
		return $this->belongsTo('Administrativo','docentes_id');
	}

	public function cursos()
	{
		return $this->hasMany('Curso','docentes_id');
	}
	
	public function departamentos()
	{
		return $this->belongsTo('Departamento');
	}

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

	

}

}