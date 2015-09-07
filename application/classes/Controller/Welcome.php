<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Front {

	public $template = 'welcome';

	public function action_index()
	{
		/***
			Шаблон
		**/

		$this->template
							->bind('assets', $assets)
							->bind('section1', $section1)
							->bind('section2', $section2)
							->bind('section3', $section3)
							->bind('section4', $section4);

		/***
			Подключаем к шаблону куски
		**/


		$section1 = View::factory('welcome/section1')
				->bind('assets', $assets);

		$section2 = View::factory('welcome/section2')
				->bind('assets', $assets);

		$section3 = View::factory('welcome/section3')
				->bind('assets', $assets);

		$section4 = View::factory('welcome/section4')
				->bind('assets', $assets);

		
		$assets = $this->assets;

	}

} // End Welcome
