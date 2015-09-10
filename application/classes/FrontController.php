<?php defined('SYSPATH') or die('No direct script access.');

class FrontController extends Controller_Template {

	public $template = '';
	public $assets = '';

	public function before() {

		$this->setAsset('http://localhost'.URL::base().'assets/');
		
		$auth = Authorization::instance();
		$session = Session::instance();
		
		$success = $auth->logged_in();
		
		if ($success == 0)
			$this->redirect('auth/auth');

		return parent::before();
	}

	private function setAsset($url) {
		$this->assets = $url;
	}
}