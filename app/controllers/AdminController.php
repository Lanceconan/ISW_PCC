<?php

// Admin Controller.php
class AdminController extends BaseController {

	protected $layout = 'layouts.master';

	public function getIndex()
	{
		return $this->layout->content = View::make('main.index4');
	}

	public function getBuscar()
	{
		return $this->layout->content = View::make('busqueda.index4');
	}

	public function postBuscar()
	{
		return $this->layout->content = View::make('busqueda.index4');
	}

	public function getConfig()
	{
		return $this->layout->content = View::make('configurar.index4');
	}

	public function postConfig()
	{
		return $this->layout->content = View::make('configurar.index4');
	}

	public function getModificar()
	{
		return $this->layout->content = View::make('manejar.cambiar');
	}

	public function postModificar()
	{
		return $this->layout->content = View::make('manejar.cambiar');
	}

	public function getBorrar()
	{
		return $this->layout->content = View::make('manejar.borrar');
	}

	public function postBorrar()
	{
		return $this->layout->content = View::make('manejar.borrar');
	}


}
