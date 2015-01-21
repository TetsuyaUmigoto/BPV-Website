<?php
class Controller
{
    function __construct()
    {
	$this->view = new View();
	Session::init();
    }
	
    public function loadmodel($name)
    {
	$path = 'models/' . $name . '.model.php';
		
	if(file_exists($path))
	{
            require 'models/' . $name . '.model.php';
            $modelname = $name . '_model';
            $this->model = new $modelname;
	}
    }
}