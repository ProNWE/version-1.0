<?php defined('SYSPATH') or die('No direct script access.');

class Controller_App extends FrontController {

	public $template = 'app';

	public function action_index()
	{
		$session = Session::Instance();

		$this->template
			->set('id', $session->get('id_user'))
			->set('username', $session->get('name'))
			->set('lastname', $session->get('lastname'))
			->set('surname', $session->get('surname'));		
	}
}