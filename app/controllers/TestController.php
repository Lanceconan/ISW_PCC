<?php

class TestController extends BaseController {

	protected $layout = 'layouts.master';

	public function getIndex()
	{
            $usuarios = Usuario::All();
            return $this->layout->content = View::make('login.index')->with('usuarios', $usuarios);
	}

}
