<?php

class Studenten_1 extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->title = 'Studenten_1';
        $this->view->style = 'bootstrap';
        $this->view->altStyle = 'style1';
    }

    function index() {
        $this->view->render('studenten_1');
    }

}
