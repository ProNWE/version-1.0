<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Countscores extends Controller {

	public function action_index()
	{
		echo 'you are in count Scores';
	}

	public function action_addscore()
	{
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
		{   
			$data = Arr::get($_POST, 'scores');

			$data = json_decode($data);
			
			$result = Model_Scores::Instance();

			$isSetScore = $result->checkscore($data->id_participant, $data->id_judge, $data->id_criteria);
			
			if ($isSetScore) 
			{
				$id = $result->checkscore($data->id_participant, $data->id_judge, $data->id_criteria);
				$result->updatescore($id, $data->score);
			}
			else 
			{
				$result->addscore($data->id_participant, $data->id_judge, $data->id_criteria, $data->score);
			}
		 	
		 	exit;   
		}  
		//Если это не ajax запрос   
		return $this->redirect('welcome');	
	}

	public function action_update() 
	{

	}
}