<?php

class Crawler extends Controller {

    public function __construct() {
        parent::__construct();
        //$this->view->script = "crawler";
        $this->view->title = 'crawler';
        $this->view->style = 'bootstrap';
    }

    function index() {
        $this->view->render('crawler');
    }
}
