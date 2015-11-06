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
}