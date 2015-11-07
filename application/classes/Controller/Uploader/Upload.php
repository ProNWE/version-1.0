<?php defined('SYSPATH') or die('No direct script access.');

/**
	* @author Khaydarov Murod
*/
class Controller_Uploader_Upload extends Controller {

	/**
		*uploads directory
	*/
	public $template = NULL;

	private function upload_dir()
	{
		return DOCROOT.'uploads'.DIRECTORY_SEPARATOR;
	}

	public function action_upload()
    {
        // check request method
        if ($this->request->method() === Request::POST)
        {
            // create validation object
            $validation = Validation::factory($_FILES)
                ->label('image', 'Picture')
                ->rules('image', array(
                    array('Upload::not_empty'),
                    array('Upload::image'),
                ));
 
            // check input data
            if ($validation->check())
            {
                // process upload
                Upload::save($validation['image'], NULL, $this->uploads_dir());
 
                // set user message
                Session::instance()->set('message', 'Image is successfully uploaded');
            }
 
            // set user errors
            Session::instance()->set('errors', $validation->errors('upload'));
        }
 
        // redirect to home page
        $this->request->redirect('/');
    }
}