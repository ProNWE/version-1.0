<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Teams extends Controller {

	public function action_index()
	{
	}

	public function action_newparticipants()
	{
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
		{   
			$id = Arr::get($_POST, 'id');
		    
			$result = Model_Teams::Instance();
			$row = $result->newparticipant($id);
			
			echo $row;
		    
		    exit;   
		}  
		//Если это не ajax запрос   
		return $this->redirect('welcome');	
	}

	public function action_deleteparticipants()
	{
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
		{   
			$id = Arr::get($_POST, 'id');
		    
			$result = Model_Teams::Instance();
			$row = $result->deleteparticipants($id);
		    
		    exit;   
		}  
		//Если это не ajax запрос   
		return $this->redirect('welcome');	
	}
	public function action_updateparticipants()
	{
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
		{   
			$id = Arr::get($_POST, 'id');
			$input = Arr::get($_POST, 'input');
			$value = Arr::get($_POST, 'value');
		    
			$result = Model_Teams::Instance();
			$row = $result->updateparticipants($input, $id, $value);
			
		    exit;   
		}  
		//Если это не ajax запрос   
		return $this->redirect('welcome');
	}
	public function action_getparticipants()
	{
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
		{   
			$id = Arr::get($_POST, 'id');
		    
			$result = Model_Teams::Instance();
			$row = $result->getParticipantsInfo($id);

			echo json_encode($row);
		    exit;   
		}  
		//Если это не ajax запрос   
		return $this->redirect('welcome');
	}
	public function action_delete()
	{
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
		{   
			$id = Arr::get($_POST, 'id');
		    
			$result = Model_Teams::Instance();
			$row = $result->delete($id);

			echo 'OK';
		    exit;   
		}  
		//Если это не ajax запрос   
		return $this->redirect('welcome');
	}
	public function action_setname()
	{
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
		{   
			$id = Arr::get($_POST, 'id');
			$newname = Arr::get($_POST, 'newname');
		    
			$result = Model_Teams::Instance();
			$row = $result->setname($id, $newname);
			
		    exit;   
		}  
		//Если это не ajax запрос   
		return $this->redirect('welcome');
	}

	public function action_setdesc()
	{
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
		{   
			$id = Arr::get($_POST, 'id');
			$newdesc = Arr::get($_POST, 'newdesc');
		    
			$result = Model_Teams::Instance();
			$row = $result->setdesc($id, $newdesc);
			
		    exit;   
		}  
		//Если это не ajax запрос   
		return $this->redirect('welcome');
	}

	public function action_editteam() 
	{
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
		{   
			$id = Arr::get($_POST, 'id');
		    
			$result = Model_Teams::Instance();
			$team = $result->getTeamInfoById($id);
			
			echo json_encode($team);
		    exit;   
		}  
		//Если это не ajax запрос   
		return $this->redirect('welcome');
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
		return $this->redirect('welcome');
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
		return $this->redirect('welcome');
	}
}