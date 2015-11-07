<?php defined('SYSPATH') or die('No direct script access.');

class Model_Organization extends Model {

	protected $user_id;

	public function getOrgInfoFromUserId($id)
	{
		$sql = "SELECT organization.id, organization.org_name, organization.email, organization.city, organization.logo FROM
		 organization JOIN users ON users.id_organization=organization.id AND users.id= :id";

		$query = DB::query(Database::SELECT, $sql, false)
			->parameters(array(
				':id' => $id
			))->execute();

		$result = $query->as_array();

		return $result;
	}
}