<?php
class Error extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
	
    function index()
    {
	$title = 'Error 404';
	$this->view->title = $title;
	$this->view->render('error');
	exit;
    }
}