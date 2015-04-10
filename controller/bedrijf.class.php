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
	$locations = "[";
	foreach($bedrijfInfo as $mapsLocation){
	    $locations .= "'" . $mapsLocation['Postcode'] . "'" . ", ";
	}
	$locations = substr($locations, 0, strlen($locations) - 2) . "]";
	$this->view->locations = $locations;
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
