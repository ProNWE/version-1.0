<?php defined('SYSPATH') or die('No direct script access.');


/**
	* Singleton Pattern
	* @author Khaydarov Murod
*/
class Model_Teams extends Model {


	public static $instance;

	public $teams;
	public $participants;
	public $sql = NULL;

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
	public function setData($team, $participants) 
	{
		$this->teams = $team;
		$this->participants = $participants;
	}

	public function getTeams() 
	{
		return $this->teams;
	}

	public function getParticipants()
	{
		return $this->participants;
	}

	public function queryString()
	{
		$sql = "INSERT INTO teams(id_event, name, description) VALUES(:id_event, :name, :description)";

		$query = DB::query(Database::INSERT, $sql, false)
			->parameters(array(
				':id_event' => $this->teams[2],
				':name' => $this->teams[0],
				':description' => $this->teams[1],
			))->execute();
		
		//$this->sql = $query;
		//$this->sql->save();

		$sql = "SELECT id FROM teams ORDER BY id DESC LIMIT 1";
		$query = DB::query(Database::SELECT, $sql, false)->execute();
		$id = $query->as_array();


		$id_team = $id[0]['id'];
		
		$sql = "INSERT INTO participants(id_team, username, role, email)
							VALUES(:id_team, :username, :role, :email)";

		$n = count($this->participants);

		for($i = 0; $i < $n; $i++)
		{
			$query = DB::query(Database::INSERT, $sql, false)
				->parameters(array(
					':id_team' => $id_team,
					':username' => $this->participants[$i]->pname,
					':role' => $this->participants[$i]->prole,
					':email' => $this->participants[$i]->pemail,
				))->execute();
		}
	}

	public function save()
	{
		//if ($this->sql != NULL)
		//$this->sql->execute();
	}

	public function execute() 
	{
		$this->queryString();
		echo 'OK';
		//$this->save();
	}

	public function sort()
	{
		$teams = $this->teams;

		$id_event = $this->teams[count($teams) - 1];


		for($i = 0; $i < count($teams) - 2; $i++) {

			$kk = explode("_", $teams[$i]);
			
			$id[$i] = $kk[0];
			$val[$i] = $kk[1];
		}
		
		for($i = 0; $i < count($val); $i++)
		{
			$pos = $i + 1;
			$sql = "UPDATE teams SET position=:pos WHERE id=:val AND id_event=:id_event";

			$query = DB::query(Database::UPDATE, $sql, false)
				->parameters(array(
						':pos' => $pos,
						':val' => $val[$i],
						':id_event' => $id_event,
					))->execute();
		}

		echo 'OK';
	}


	public function getTeamInfoById($id) 
	{
		$sql = "SELECT * FROM teams JOIN participants WHERE 
						teams.id=:id AND
						participants.id_team =:id_team AND
						participants.role LIKE :pattern";

		$query = DB::query(Database::SELECT, $sql, false)
			->parameters(array(
					':id' => $id,
					':id_team' => $id,
					':pattern' => '%Капитан%',
				))->execute();
		
		$result = $query->as_array();

		$answer['name'] = $result[0]['name'];
		$answer['description'] = $result[0]['description'];
		$answer['username'] = $result[0]['username'];
		$answer['email'] = $result[0]['email'];
		$answer['role'] = $result[0]['role'];

		$count = $this->getCountOfparticipants($id);

		$answer['count'] = $count[0]['count(*)'];

		return $answer;
	}
	public function getParticipantsInfo($id) {

		$sql = "SELECT * FROM participants WHERE
								id_team = :id_team ";

		$query = DB::query(Database::SELECT, $sql, false)
					->parameters(array(
							':id_team' => $id,
						))->execute();

		return $query->as_array();
	}

	public function getCountOfparticipants($id) {

		$sql = "SELECT count(*) FROM participants WHERE
								id_team = :id_team ";

		$query = DB::query(Database::SELECT, $sql, false)
					->parameters(array(
							':id_team' => $id,
						))->execute();

		return $query->as_array();
	}

	public function delete($id) {
		$sql = "DELETE FROM teams WHERE id=:id";
		$query = DB::query(Database::DELETE, $sql, false)
			->parameters(array(
					':id' => $id,
				))->execute();

		return 'OK';
	}
	public function setname($id, $name)
	{
		$sql = "UPDATE teams SET name=:name WHERE id=:id";

		$query = DB::query(Database::UPDATE, $sql, false)
			->parameters(array(
					':name' => $name,
					':id' => $id,
				))->execute();
		
		return 'OK';
	}

	public function setdesc($id, $desc)
	{
		$sql = "UPDATE teams SET description=:description WHERE id=:id";

		$query = DB::query(Database::UPDATE, $sql, false)
			->parameters(array(
					':description' => $desc,
					':id' => $id,
				))->execute();
		
		return 'OK';
	}

	public function updateparticipants($input, $id, $value)
	{
		if ($input == 'r')
			$sql = "UPDATE participants SET role=:value WHERE id=:id";
		else if ($input == 'p')
			$sql = "UPDATE participants SET username=:value WHERE id=:id";
		else if ($input == 'e')
			$sql = "UPDATE participants SET email=:value WHERE id=:id";

		$query = DB::query(Database::UPDATE, $sql, false)
			->parameters(array(
				':value' => $value,
				':id' => $id,
			))->execute();

		echo $query;
	}

	public function deleteparticipants($id)
	{
		$sql = "DELETE FROM participants WHERE id=:id";

		$query = DB::query(Database::DELETE, $sql, false)
			->parameters(array(
					':id' => $id,
				))->execute();

		return $query;
	}
}
