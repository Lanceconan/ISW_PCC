<?php

class TestController extends BaseController {

	protected $layout = 'layouts.master';

	public function getIndex()
	{
		return $this->layout->content = View::make('login.index');
	}

}
