<?php

// Common Controller.php
class CommonController extends BaseController {

	protected $layout = 'layouts.master';

	public function getIndex()
	{
		return $this->layout->content = View::make('main.index1');
	}

	public function getBuscar()
	{
		return $this->layout->content = View::make('busqueda.index1');
	}

	public function postBuscar()
	{
		return $this->layout->content = View::make('busqueda.index1');
	}

	public function getConfig()
	{
		return $this->layout->content = View::make('configurar.index1');
	}

	public function postConfig()
	{
		return $this->layout->content = View::make('configurar.index1');
	}

}
