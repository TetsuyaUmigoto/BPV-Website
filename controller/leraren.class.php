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
        $klassen =  $this->model->getKlassen();
        $agenda = $this->model->showCaldav();
        $leraar = $this->model->getLeraar();
        $this->view->leraar = $leraar;
        $this->view->klassen = $klassen;
        $this->view->leerlingen = $leerlingen;
        $this->view->agenda = $agenda;
        $this->view->render('leraren');
    }
    
    function showKlas($klasNaam){
	$leerlingen = $this->model->getKlasLeerlingen($klasNaam);
	$mapsLocations = $this->model->getMapsLocations($klasNaam);
        $klassen =  $this->model->getKlassen();
        $agenda = $this->model->showCaldav();
        $leraar = $this->model->getLeraar();
	
	$locations = "[";
	foreach($mapsLocations as $mapsLocation){
	    $locations .= "'" . $mapsLocation['bedrijfPostcode'] . "'" . ", ";
	}
	$locations = substr($locations, 0, strlen($locations) - 2) . "]";
	
	$names = "[";
	foreach($mapsLocations as $name){
	    $names .= "'" . $name['voornaam'] ." ". $name['achternaam'] . "'" . ", ";
	}
	$names = substr($names, 0, strlen($names) - 2) . "]";
	
	$this->view->names = $names;
	$this->view->locations = $locations;
	$this->view->mapsLocations = $mapsLocations;
        $this->view->leraar = $leraar;
        $this->view->klassen = $klassen;
        $this->view->leerlingen = $leerlingen;
        $this->view->agenda = $agenda;
        $this->view->render('leraren');
    }
    
    function showStudent($leerlingNummer){
	$student = $this->model->getStudent($leerlingNummer);
	
	$locations = "[";
	foreach($student as $mapsLocation){
	    $locations .= "'" . $mapsLocation['bedrijfPostcode'] . "'" . ", ";
	}
	$locations = substr($locations, 0, strlen($locations) - 2) . "]";
	
	$names = "[";
	foreach($student as $name){
	    $names .= "'" . $name['voornaam'] ." ". $name['achternaam'] . "'" . ", ";
	}
	$names = substr($names, 0, strlen($names) - 2) . "]";
	
	$this->view->names = $names;
	$this->view->locations = $locations;
	$this->view->student = $student;
	$this->view->render('student');
    }

    function caldav() {
        $this->model->caldav();
    }

}
