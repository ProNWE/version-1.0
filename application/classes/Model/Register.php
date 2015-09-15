<?php defined('SYSPATH') or die('No direct script access.');

class Model_Register extends Model {

	/**
		* Добавление организации и
		* инициатора
	*/

	public function __construct($data = array())
	{
		$org_name = Arr::get($data, 'org_name');
		$lastname = Arr::get($data, 'lastname');
		$name = Arr::get($data, 'name');
		$surname = Arr::get($data, 'surname');
		$address = Arr::get($data, 'address');
		$city = Arr::get($data, 'city');
		$login = Arr::get($data, 'login');
		$password = Arr::get($data, 'password');
		$phone = Arr::get($data, 'phone');
		$email = Arr::get($data, 'email');

		$sql = "INSERT INTO organization(org_name, city, email)
						VALUES(:org_name, :city, :email)";

		$sql1 = "INSERT INTO users(lastname, name, surname, address, city, login, password, 					phone, email, id_organization)
						VALUES(:lastname, :name, :surname, :address, :city, :login, :password,
								:phone, :email, :id_organization)";

		$sql2 = "INSERT INTO users_role(id_user, role)
						VALUES(:id_user, :role)";

		$query = DB::query(Database::INSERT, $sql, FALSE)
				->parameters(array(
					':org_name' => $org_name,
					':city' => $city,
					':email' => $email
				))->execute();

		$query = DB::query(Database::SELECT, "SELECT id FROM organization ORDER BY id DESC LIMIT 1")->execute();

		$result = $query->as_array();
		$id = $result[0]['id'];


		$query = DB::query(Database::INSERT, $sql1, FALSE)
				->parameters(array(
					':lastname' => $lastname,
					':name' => $name,
					':surname' => $surname,
					':address' => $address,
					':city' => $city,
					':login' => $login,
					':password' => $password,
					':phone' => $phone,
					':email' => $email,
					':id_organization' => $id
				))->execute();

		$query = DB::query(Database::SELECT, "SELECT id FROM users ORDER BY id DESC LIMIT 1")
				->execute();

		$result = $query->as_array();
		$id = $result[0]['id'];

		$query = DB::query(Database::INSERT, $sql2, FALSE)
				->parameters(array(
					':id_user' => $id,
					':role' => 1
				))->execute();

	}
}