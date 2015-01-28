<?php

class Index extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->style = 'bootstrap';
        $this->view->title = 'Index';
    }

    public function index() {
        $this->view->render('index');
    }

}
