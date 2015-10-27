<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Events_Events extends FrontController {

	public $template = 'judge';

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
			$id_event = $event->getDataAndSave($_POST);

			$this->redirect('events/index/'.$id_event);
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

		// ORGANIZATION INFO 
		$organization = new Model_Organization();
		$info_organization = $organization->getOrgInfoFromUserId($session->get('id_user'));

		$this->template
			->set('org_name', $info_organization[0]['org_name'])
			->set('email', $info_organization[0]['email']);

		// EVENT INFO
		//$id = $this->request->post('id'); 
		$id = $this->request->param('id');

		$event = Model_Event::Instance();
		$info = $event->getEventInfoById($id);

		$this->template
			->set('logo', $info[0]['logo'])
			->set('event', $info[0]['event_name'])
			->set('city', $info[0]['city'])
			->set('level', $info[0]['level'])
			->set('start', $info[0]['start_data'])
			->set('website', $info[0]['website'])
			->set('start_scores', $info[0]['start_scores']);
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
	}
}