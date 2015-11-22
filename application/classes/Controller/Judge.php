<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Judge extends Controller {

	public function action_index() {
		echo 'Index File';
	}


	public function action_add()
	{
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
		{   
			$data = json_decode(Arr::get($_POST, 'data'));
		    
			$result = Model_Judge::Instance();
			$result->setData($data);

			$result->save();
			
			//echo 'here';
		    exit;   
		}  
		//Если это не ajax запрос   
		return $this->redirect('welcome');	
	}
	
}