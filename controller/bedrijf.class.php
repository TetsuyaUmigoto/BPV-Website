<?php

class Bedrijf extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->script = 'bedrijf';
        $this->view->title = 'Bedrijf';
        $this->view->style = 'bootstrap';
        $this->view->altStyle = 'style1';
    }

    function index() {
        $comments = $this->model->showComment();
        $this->view->comments = $comments;
        $this->view->render('bedrijf');
    }

    function postComment() {
        $this->model->postComment();
    }

}
