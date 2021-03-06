<?php

class DirController extends BaseController {

	protected $layout = 'layouts.master';

	public function getIndex()
	{
		return $this->layout->content = View::make('main.index2');
	}

	public function getBuscar()
	{
		return $this->layout->content = View::make('busqueda.index2');
	}

	public function postBuscar()
	{
		return $this->layout->content = View::make('busqueda.index2');
	}

	public function getConfig()
	{
		return $this->layout->content = View::make('configurar.index2');
	}

	public function postConfig()
	{
		return $this->layout->content = View::make('configurar.index2');
	}

	public function getPDF()
	{
		return $this->layout->content = View::make('pdf.index2');
	}

	public function getPlan()
	{
		return $this->layout->content = View::make('crear.index2');
	}

	public function postPlan()
	{
		return $this->layout->content = View::make('crear.index2');
	}

	public function getRevisar()
	{
		return $this->layout->content = View::make('revisar.index2');
	}

	public function postRevisar()
	{
		return $this->layout->content = View::make('revisar.index2');
	}

	public function getAprobar()
	{
		return $this->layout->content = View::make('chequear.index2');
	}

	public function postAprobar()
	{
		return $this->layout->content = View::make('chequear.index2');
	}


}
