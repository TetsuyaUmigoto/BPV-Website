<?php

class Leraren extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->title = 'Leraren';
        $this->view->style = 'bootstrap';
        $this->view->altStyle = 'style1';
    }

    function index() {
        $leerlingen = $this->model->getAlliedLeerlingen($_SESSION["user_id"]);
        $agenda = $this->model->showCaldav();
        $this->view->leerlingen = $leerlingen;
        $this->view->agenda = $agenda;
        $this->view->render('leraren');
    }

    function caldav() {
        $this->model->caldav();
    }

}
