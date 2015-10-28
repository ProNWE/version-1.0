<?php defined('SYSPATH') or die('No direct script access.');


/**
	* Singleton Pattern
	* @author Khaydarov Murod
*/
class Model_Teams extends Model {


	public static $instance;

	/* Closing Main Class functions */
	private function __construct() {
	}

	private function __clone() {
	}

	private function __sleep() {
	}

	public static function Instance()
	{
		if (!(self::$instance instanceof self))
			self::$instance = new self();

		return self::$instance;
	}


	/* Working with class */
	

}