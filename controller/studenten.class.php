<?php

class Studenten extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->title = 'Studenten';
        $this->view->style = 'bootstrap';
        $this->view->altStyle = 'studentpagina';
    }

    function index() {
        $studentInfo = $this->model->getStudentInfo($_SESSION['user_id']);
        $pokInfo = $this->model->getPokInfo($_SESSION['user_id']);
        $this->view->pokInfo = $pokInfo;
        $this->view->studentInfo = $studentInfo;
        $this->view->render('studenten');
    }
    
    function pokAnnuleren(){
	$this->model->pokAnnuleren();
    }

}
