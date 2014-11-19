<?php
class Index extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$title = 'Home';
		$this->view->title = $title;
		$this->view->render('index');
	}

}
?>