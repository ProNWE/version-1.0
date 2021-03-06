<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Front {

	public $template = 'authorization';

	public function action_index()
	{

		/**
			*Main Auth page
			*Default destroying session
		*/

		$auth = Authorization::Instance()->logout();
		$this->template->assets = $this->assets;
		$this->template->attempt = 0;
	}

	public function action_auth()
	{

		$this->template->assets = $this->assets;

		/**
			*Authorization
			*Get Login and password from POST method,
			*Authoriziting and saving in session
			*Redirect to Application
			*Unsuccessful login will be redirected in the same page with Attempt
		*/

		$login = Arr::get($_POST, 'login');
		$password = Arr::get($_POST, 'password');

		$auth = Authorization::instance();

		$result = $auth->login($login, $password);
		$user = $result[0];

		if ($auth->logged_in() && Session::Instance()->get('attempt') <= 3)
		{
			$session = Session::Instance()->set('attempt', '0');

			if ($session->get('role') == 2) {
				$judge = Model_Judge::Instance();
				$event = $judge->getEvent($session->get('id_user'));
				$this->redirect('evaluate/'.$session->get('id_user').'/'.base64_encode('event_'.$event));
			}

			$this->redirect('app');

			echo $session->get('role');
		}
		else if (Session::Instance()->get('attempt') >= 3)
		{
			$this->redirect('welcome');
		}
		else
		{
			$this->attempt++;

			$session = SESSION::Instance();
			$session->set('attempt', $this->attempt);
			$this->template->attempt = $this->attempt;
		}
	}

	public function action_logout()
	{

		/**
			*Logging out, Destroying session;
		*/

		$this->template->assets = $this->assets;
		$this->template->attempt = SESSION::Instance()->get('attempt');
		$auth = Authorization::Instance()->logout();

		$this->redirect('welcome');
	}

}