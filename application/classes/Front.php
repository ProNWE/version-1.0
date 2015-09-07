<?php defined('SYSPATH') or die('No direct script access.');

class Front extends Controller_Template {

	public $template = '';
	public $tt = 1;
	public $assets = '';

	public function before() {

		$this->setAsset('http://localhost'.URL::base().'assets/');
		
		if ($this->tt == 0)
			return 0;
		return parent::before();
	}

	private function setAsset($url) {
		$this->assets = $url;
	}
}