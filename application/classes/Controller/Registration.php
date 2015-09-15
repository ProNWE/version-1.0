<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Registration extends Front {

	public $template = 'registration';
	
	public function action_index()
	{
		
	}

	public function action_add()
	{
		
		$register = new Model_Register($_POST);

		$register->execute();
		$this->redirect('auth');
	}

	public function action_confirm()
	{
		$email = Arr::get($_GET, 'confirm');
		echo $email;
	}
}