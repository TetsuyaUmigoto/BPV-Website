<?php

class Bedrijf extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->title = 'Bedrijf';
        $this->view->style = 'bootstrap';
        $this->view->altStyle = 'style1';
    }

    function index() {
        $this->view->render('bedrijf');
    }

}
