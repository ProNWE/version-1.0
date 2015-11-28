<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Evaluate extends FrontController {

	public $template = 'evaluation';

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

		$base64 = $this->request->param('event');

		$decoded_base64 = base64_decode($base64);
		$list = split('_', $decoded_base64);
		$id = $list[1];
		
		$event = Model_Event::Instance();

		/* 
			* INFO ABOUT EVENT
		*/
		$info = $event->getEventInfoById($id);
		$this->template
			->set('logo', $info[0]['logo'])
			->set('event', $info[0]['event_name'])
			->set('city', $info[0]['city'])
			->set('level', $info[0]['level'])
			->set('start', $info[0]['start_data'])
			->set('website', $info[0]['website'])
			->set('start_scores', $info[0]['start_scores'])
			->set('id_event', $id)
			->set('id_organization', $info_organization[0]['id'])
			->set('evaluate', view::factory('test/Evaluate'));

		/*
			** GETTING EVENTS TEAM
		*/
		$teams = $event->getTeamsByIdEvent($id);
		$this->template
			->set('teams', $teams);
	}
}