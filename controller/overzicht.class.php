<?php

class Overzicht extends Controller{

    public function __construct(){
	parent::__construct();
	$this->view->title = 'Overzicht';
	$this->view->style = 'bootstrap';
	$this->view->altStyle = 'style1';
    }

    function index(){
	if(isset($_GET['naam']) || isset($_GET['soort']) || isset($_GET['plaats'])){
	    $bedrijven = $this->model->getBedrijf();
	}else{
	    $bedrijven = $this->model->getBedrijven();
	}
	$this->view->bedrijfList = $bedrijven;
	$this->view->render('overzicht');
    }

}
