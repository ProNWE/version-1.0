<?php defined('SYSPATH') or die('No direct script access.');

class Model_Auth extends Model {

	/**
		* Работаем с таблицами Users, Users_role, Organization
	*/

	protected $login;
	protected $password;

	public function __construct($login, $password)
	{
		$this->login = $login;
		$this->password = $password;
	}


	public function login() 
	{
		$sql = "SELECT users.id, users.lastname, users.surname, users.name,
						users.login, users.email, users_role.role, organization.logo, organization.city, organization.org_name
		FROM users JOIN users_role, organization 
				WHERE users.login = :login AND users.password = :password AND users.id_organization = organization.id";

		$query = DB::query(Database::SELECT, $sql, FALSE)
			->parameters(array(
				':login' => $this->login,
				':password' => $this->password,
			))->execute();


		$result = $query->as_array();

		return $result;
	}
}