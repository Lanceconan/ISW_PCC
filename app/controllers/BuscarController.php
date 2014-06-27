<?php

// Buscar Controller.php
class BuscarController extends BaseController {

	protected $layout = 'layouts.master';

	public function getIndex()
	{
		return $this->layout->content = View::make('busqueda.index');
	}

}
