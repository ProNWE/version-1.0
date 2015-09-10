<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Front {

	public $template = 'authorization';

	public function action_index()
	{

	}

	public function action_auth()
	{
		$login = Arr::get($_POST, 'login');
		$password = Arr::get($_POST, 'password');

		$auth = Authorization::instance();

		$result = $auth->login($login, $password);
		$user = $result[0];

		if ($auth->logged_in())
			$this->redirect('app');
	}

}