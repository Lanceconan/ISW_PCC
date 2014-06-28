<?php

class TeacherController extends BaseController {

	protected $layout = 'layouts.master';

	public function getIndex()
	{
		return $this->layout->content = View::make('main.index3');
	}

	public function getBuscar()
	{
		return $this->layout->content = View::make('busqueda.index3');
	}

	public function postBuscar()
	{
		return $this->layout->content = View::make('busqueda.index3');
	}

	public function getConfig()
	{
		return $this->layout->content = View::make('configurar.index3');
	}

	public function postConfig()
	{
		return $this->layout->content = View::make('configurar.index3');
	}

	public function getPlan()
	{
		return $this->layout->content = View::make('crear.index3');
	}

	public function postPlan()
	{
		return $this->layout->content = View::make('crear.index3');
	}

	public function getRevisar()
	{
		return $this->layout->content = View::make('revisar.index3');
	}

	public function postRevisar()
	{
		return $this->layout->content = View::make('revisar.index3');
	}


}
