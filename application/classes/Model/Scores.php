<?php defined('SYSPATH') or die('No direct script access.');


/**
	* Singleton Pattern
	* @author Khaydarov Murod
*/
class Model_Scores extends Model {


	public static $instance;
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

	public function checkscore($id_participant, $id_judge, $id_criteria)
	{
		$select = DB::select('*')->from('scores')->where('id_participant', '=', $id_participant)
												->and_where('id_judge', '=', $id_judge)
												->and_where('id_criteria', '=', $id_criteria)
												->execute();

		$result = $select->as_array();
		if (count($result) != 0)
			return $result[0]['id'];
		else 
			return 0;
	}

	public function addscore($id_participant, $id_judge, $id_criteria, $score)
	{
		$insert = DB::insert('scores', array(
				'id_participant', 'id_judge', 'id_criteria', 'score',
			))->values(array(
				$id_participant, $id_judge, $id_criteria, $score,
			))->execute();
	}	

	public function updatescore($id, $score)
	{
		$update = DB::update('scores')->set(array('score' => $score))->where('id', '=', $id)->execute();
	}

	public function getScore($id_participant, $id_criteria = null)
	{
		if ($id_criteria == null) {
			$select = DB::select(array(DB::expr('SUM(`score`)'), 'total'))
						->from('scores')->where('id_participant', '=', $id_participant);
		}
		else {
			$select = DB::select(array(DB::expr('SUM(`score`)'), 'total'))
							->from('scores')->where('id_participant', '=', $id_participant)
							->and_where('id_criteria', '=', $id_criteria);
		}		
		return $select->execute()->get('total');
	}
}
