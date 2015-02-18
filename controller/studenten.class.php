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
        $this->view->studentInfo = $studentInfo;
        $this->view->render('studenten');
    }

}
