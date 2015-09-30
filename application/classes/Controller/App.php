<?php defined('SYSPATH') or die('No direct script access.');

class Controller_App extends FrontController {

	public $template = 'app';

	public function action_index()
	{
		$session = Session::Instance();

		$this->template
			->set('assets', $this->assets)
			->set('id', $session->get('id_user'))
			->set('username', $session->get('username'))
			->set('lastname', $session->get('lastname'))
			->set('surname', $session->get('surname'));

		$this->template
			->set('org_name', 'Университет ИТМО')
			->set('information', 'zlsjhgjkhzbdkfjhbkjzhbdfkvkzjdhfbzbkjhbvzahbfhjvdbkfjbhvskjhdb')
			->set('email', 'moscow@mail.ru');	


		$this->template->table = View::factory('tables/allevents');	
	}

	public function action_event()
	{
		$session = Session::Instance();

		$this->template
			->set('assets', $this->assets)
			->set('id', $session->get('id_user'))
			->set('username', $session->get('username'))
			->set('lastname', $session->get('lastname'))
			->set('surname', $session->get('surname'));

		$this->template
			->set('org_name', 'Университет ИТМО')
			->set('information', 'zlsjhgjkhzbdkfjhbkjzhbdfkvkzjdhfbzbkjhbvzahbfhjvdbkfjbhvskjhdb')
			->set('email', 'moscow@mail.ru');	


		$this->template->table = View::factory('tables/addevent');		

	}
}