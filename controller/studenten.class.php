<?php

class Studenten extends Controller {

    public function __construct() {
        parent::__construct();
        //$this->view->script = "crawler";
        $this->view->title = 'Studenten';
        $this->view->style = 'bootstrap';
        $this->view->altStyle = 'studentpagina';
    }

    function index() {
        $this->view->render('studenten');
    }
}