<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Events_Events extends FrontController {

	public $template = 'events';

	public function action_addevent()
	{
		$this->template
			->set('assets', '')
			->set('uploads', '')
			->set('id', '')
			->set('username', '')
			->set('lastname', '')
			->set('surname', '');

		$this->template
			->set('org_name', '')
			->set('information', '')
			->set('email', '')
			->set('event', '')
			->set('tables', '');


		if (HTTP_Request::POST == $this->request->method())
		{
			$event = Model_Event::Instance();
			$event->getDataAndSave($_POST);

			$this->request->redirect('events/index/$id_event');
		}
	}

	public function action_index()
	{
		$session = Session::Instance();

		$this->template
			->set('assets', $this->assets)
			->set('uploads', $this->uploads)
			->set('id', $session->get('id_user'))
			->set('username', $session->get('username'))
			->set('lastname', $session->get('lastname'))
			->set('surname', $session->get('surname'));

		$this->template
			->set('org_name', $session->get('org_name'))
			->set('information', $session->get('info'))
			->set('email', 'sds')
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