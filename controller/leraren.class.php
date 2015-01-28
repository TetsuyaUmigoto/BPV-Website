<?php

class Leraren extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->title = 'Leraren';
        $this->view->style = 'bootstrap';
        $this->view->altStyle = 'style1';
    }

    function index() {
        $this->view->render('leraren');
    }

}
