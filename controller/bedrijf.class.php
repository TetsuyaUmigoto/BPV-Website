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
        $this->view->render('bedrijf');
    }

    function showBedrijf($id) {
        $this->getComments($id);
        $bedrijfInfo = $this->model->getBedrijfInfo($id);
        
        $gemiddelde = $this->model->getGemiddelde($id);
        $this->view->bedrijfId = $id;
        $this->view->info = $bedrijfInfo;
        $this->view->gemiddelde = round($gemiddelde[0]["gemiddelde"]);
        $this->view->render('bedrijf');
    }
    function getComments($id){
        $comments = $this->model->showComment($id);
        $this->view->comments = $comments;
    }
    function postComment() {
        $this->model->postComment();
    }

}
