<?php defined('SYSPATH') or die('No direct script access.');


/**
	* Singleton Pattern
	* @author Khaydarov Murod
*/

Class Model_Event extends Model {

	private static $_instance;

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
		* @param getData
		* @param createSqlRequest
		* @param addToDB
	*/

	public function getDataAndSave($data)
	{
		$event_name = $_POST['eventname'];
		$city = $_POST['city'];
		$level = $_POST['level'];
		$start_data = $_POST['start_data'];
		$website = $_POST['website'];
		$start_scores = $_POST['start'];

		if (isset($_FILES['logo']))
		{
			$model = empty(Kohana::find_file('classes', 'model/uploader')) ? FALSE : TRUE;
			if ($model == 1)
			{
				$upload = new Model_Uploader();
				$filename = $upload->_save_image($_FILES['logo']);
			
				$logo = $_FILES['logo']['name'];
			}
		}

		$session = session::instance();
		$id_user = $session->get('id_user');

		$organization = new Model_Organization();
		$org_info = $organization->getOrgInfoFromUserId($id_user);

		$id_organization = $org_info[0]['id'];

		/* Creating SQL Request */
		$sql = "INSERT INTO event(event_name, city, level, start_data, website, start_scores, logo)
						VALUES(:event_name, :city, :level, :start_data, :website, :start_scores, :logo)";

		$query = DB::query(Database::INSERT, $sql, false)
			->parameters(array(
					':event_name' => $event_name,
					':city' => $city,
					':level' => $level,
					':start_data' => $start_data,
					':website' => $website,
					':start_scores' => $start_scores,
					':logo' => $logo,
				))->execute();

		/* Getting last event ID */
		$sql = "SELECT id FROM event WHERE event_name = :event_name";
		
		$query = DB::query(Database::SELECT, $sql, false)
			->parameters(array(
					':event_name' => $event_name,
				))->execute();

		$result = $query->as_array();

		$id_event = $result[0]['id'];

		/* SAVE to OEvents */
		$sql = "INSERT INTO OEvents(id_organization, id_event)
						VALUES(:id_organization, :id_event)";
		
		$query = DB::query(Database::INSERT, $sql, false)
			->parameters(array(
				':id_organization' => $id_organization,
				':id_event' => $id_event,
			))->execute();


		return $id_event;
	}

	
	public function getEventsByOrgId($id)
	{
		$sql = "SELECT 
						event.id, event.event_name, event.city, event.level, 
						event.start_data, event.website,
						event.logo, event.start_scores 
				FROM 
						event, OEvents 
				WHERE 
					OEvents.id_organization = '$id' AND 
					OEvents.id_event = event.id";

		$query = DB::query(Database::SELECT, $sql, false)->execute();

		return $query->as_array();

	}

	public function getEventsByOrgIdAndStatus($id, $status = false)
	{
		$sql = "SELECT 
						event.id, event.event_name, event.city, event.level, 
						event.start_data, event.website,
						event.logo, event.start_scores 
				FROM 
						event, OEvents 
				WHERE 
					OEvents.id_organization = '$id' AND 
					OEvents.id_event = event.id AND
					event.status = '$status'";

		$query = DB::query(Database::SELECT, $sql, false)->execute();

		return $query->as_array();

	}
}