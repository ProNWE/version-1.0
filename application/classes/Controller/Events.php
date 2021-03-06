<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Events extends FrontController {

	public $template = 'events';

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
			->set('email', 'moscow@mail.ru')
			->set('event', 'Miss ITMO University');	

		$this->template
			->set('tables', '<div class="row">
			<div class="marks">	
			</div>
		</div>');

	}

	public function action_teams()
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
			->set('email', 'moscow@mail.ru')
			->set('event', 'Miss ITMO University');	


		$this->template
			->set('tables', '<div class="row">
			<div class="marks">	
			</div>
		</div>');
	}

	public function action_judge()
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
			->set('email', 'moscow@mail.ru')
			->set('event', 'Miss ITMO University');	


		$this->template
			->set('tables', '<div class="row">
			<div class="marks">	
			</div>
		</div>');
	}
}