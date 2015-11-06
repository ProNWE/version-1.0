<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Teams extends Controller {

	public function action_index()
	{
	}

	public function action_addteam()
	{
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
		{   
			$teams = $_POST['t_data'];
		    $participant = json_decode($_POST['p_data']);
		    
		    $result = Model_Teams::Instance();
			$result->setData($teams, $participant);

		    $result->execute();

		    exit;   
		}  
		//Если это не ajax запрос   
		return $this->request->redirect('welcome');
	}

	public function action_sort() {
		
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
		{   
			$teams = $_POST['teams'];
		    
		    $result = Model_Teams::Instance();
			$result->setData($teams, '');

			//print_r($result->getTeams());
			$result->sort();
			
		    exit;   
		}  
		//Если это не ajax запрос   
		return $this->request->redirect('welcome');
	}
}