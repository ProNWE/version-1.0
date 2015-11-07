<?php defined('SYSPATH') or die('No direct script access.');

class Front extends Controller_Template {

	public $template = '';
	public $tt = 1;
	public $assets = '';
	public $attempt;

	public function before() {

		$this->setAsset('http://localhost'.URL::base().'assets/');
		
		$this->loginAttempt();

		return parent::before();
	}

	private function setAsset($url) {
		$this->assets = $url;
	}

	private function loginAttempt()
	{
		$session = SESSION::Instance();

		$incorrect = $session->get('attempt');
		
		if (isset($incorrect))
			$this->attempt = $session->get('attempt');
		else 
		{
			$this->attempt = 0;
			$session->set('attempt', $this->attempt);
		}
	}
}