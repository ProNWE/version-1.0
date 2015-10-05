<?php defined('SYSPATH') or die('No direct script access.');

class FrontController extends Controller_Template {

	public $template = '';
	public $assets = '';
	public $uploads = '';

	public function before() {

		$this->setAsset('http://localhost'.URL::base().'assets/');
		
		$auth = Authorization::instance();
		$session = Session::instance();
		
		$success = $auth->logged_in();
		
		if ($success == 0 && SESSION::instance()->get('attempt') <= 3)
			$this->redirect('auth');

		return parent::before();
	}

	private function setAsset($url) {
		$this->assets = $url;
		$this->uploads = 'http://localhost'.URL::base().'uploads/';
	}

	private function updateApplication()
	{
		$updater = 'updater/';
	}
}