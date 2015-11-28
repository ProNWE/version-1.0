<?php defined('SYSPATH') or die('No direct script access.');


/**
	* Singleton Pattern
	* @author Khaydarov Murod
*/

Class Model_Judge extends Model {

	private static $_instance;
	public $data;

	/* Everything is closed */
	private function __construct() {
	}
	private function __clone() {
	}
	private function __sleep() {
	}

	/* Opening Constructor */
	public static function Instance()
	{
		if (!(self::$_instance instanceof self)) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}


	/**
		* Methods:
		* @param setData
		* @param getData
		* @param createSqlRequest
		* @param addToDB
	*/

	public function setData($data) 
	{
		$this->data = $data;
	}

	public function save()
	{
		$now = $this->data;

		$insert = DB::insert('users', 
			array('lastname', 'name', 'surname', 'address', 'phone', 'city', 'id_organization', 'login', 'password', 'email'))
		->values(array($now->lastname, $now->name, $now->surname, 'SPB', $now->phone, $now->city, 
			$now->id_organization, $now->login, $now->password, $now->email))->execute();

		$select = DB::select('id')->from('users')->order_by('id', 'DESC')->limit(1)->execute();
		$idtmp = $select->as_array();
		$id = $idtmp[0]['id'];
		
		$insert = DB::insert('judges', array('id_user', 'id_event'))
					->values(array($id, $now->id_event))->execute();

		$insert = DB::insert('users_role', array('id_user', 'role'))
					->values(array($id, '2'))->execute();

		return 'OK';
	}

	public function getEvent($id)
	{
		$select = DB::select('*')->from('judges')->where('id_user', '=', $id)->execute()->as_array();
		return $select[0]['id_event'];
	}
}