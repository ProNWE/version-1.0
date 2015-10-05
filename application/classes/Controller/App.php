<?php defined('SYSPATH') or die('No direct script access.');

class Controller_App extends FrontController {

	public $template = 'app';

	public function action_index()
	{
		$session = Session::Instance();

		// BASE INFO
		$this->template
			->set('assets', $this->assets)
			->set('uploads', $this->uploads)
			->set('id', $session->get('id_user'))
			->set('username', $session->get('username'))
			->set('lastname', $session->get('lastname'))
			->set('surname', $session->get('surname'));

		// ORGANIZATION INFO 
		$organization = new Model_Organization();
		$info = $organization->getOrgInfoFromUserId($session->get('id_user'));

		$this->template
			->set('org_name', $info[0]['org_name'])
			->set('email', $info[0]['email'])
			->set('logo', $session->get('logo'));

		// ORGANIZATION EVENTS
		$this->template->table = View::factory('tables/allevents');
	}

	public function action_newevent()
	{
		$session = Session::Instance();

		// BASE INFO
		$this->template
			->set('assets', $this->assets)
			->set('uploads', $this->uploads)
			->set('id', $session->get('id_user'))
			->set('username', $session->get('username'))
			->set('lastname', $session->get('lastname'))
			->set('surname', $session->get('surname'));

		// ORGANIZATION INFO 
		$organization = new Model_Organization();
		$info = $organization->getOrgInfoFromUserId($session->get('id_user'));

		$this->template
			->set('org_name', $info[0]['org_name'])
			->set('email', $info[0]['email'])
			->set('logo', $session->get('logo'));


		$this->template->table = View::factory('tables/addevent');		

	}

}