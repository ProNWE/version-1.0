<?php defined('SYSPATH') OR die('No direct access allowed.');


/** 
	* Свой модуль авторизации
*/

class Authorization {

	protected static $instance = FALSE; 

	protected $_session;
	protected $_config;

	/**
		* Шаблон проектирования Singleton
	*/

	private function __constuct($config = array()) 
	{
		$this->_config = $config;

		$this->_session = Session::instance($this->_config['session_type']);
	}

	public static function instance()
	{
		if (self::$instance == FALSE)
		{
			$config = Kohana::$config->load('auth');

			self::$instance = new Authorization($config);
			return self::$instance;
		}
		else 
		{
			return Null;
		}
	}


	public function login($login, $password) 
	{
		$login = new Model_Auth($login, $password);

		$logged = $login->login();
	
		if ($logged)
		{
			$this->_session = Session::instance();

			$this->_session->set('username', $logged[0]['name']);
			$this->_session->set('lastname', $logged[0]['lastname']);
			$this->_session->set('surname', $logged[0]['surname']);
			$this->_session->set('login', $logged[0]['login']);
			$this->_session->set('id_user', $logged[0]['id']);
			$this->_session->set('role', $logged[0]['role']);
			$this->_session->set('org_name', $logged[0]['org_name']);
			$this->_session->set('city', $logged[0]['city']);
			$this->_session->set('email', $logged[0]['email']);
			$this->_session->set('logo', $logged[0]['logo']);

			return $logged;

		}

	}

	public function logged_in()
	{
		$this->_session = Session::instance();
		if ($this->_session->get('id_user'))
			return 1;
		else 
			return 0;
	}

	public function logout($destroy = FALSE)
	{
		$this->_session = Session::instance();

		$this->_session->destroy();
		// Double check
		return ! $this->logged_in();
	}

} // Конец авторизации