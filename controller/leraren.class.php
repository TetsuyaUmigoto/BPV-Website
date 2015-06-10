<?php

class Leraren extends Controller{

    public function __construct(){
	parent::__construct();
	$this->view->title = 'Leraren';
	$this->view->style = 'bootstrap';
	$this->view->altStyle = 'style1';
    }

    function index(){
	$klassen = $this->model->getKlassen();
	$leraar = $this->model->getLeraar();
	$this->view->leraar = $leraar;
	$this->view->klassen = $klassen;
	$this->view->render('leraren');
    }

    function showKlas($klasNaam){
	$leerlingen = $this->model->getKlasLeerlingen($klasNaam);
	$mapsLocations = $this->model->getMapsLocations($klasNaam);
	$klassen = $this->model->getKlassen();
	$leraar = $this->model->getLeraar();

	$locations = "[";
	foreach($mapsLocations as $mapsLocation){
	    $locations .= "'" . $mapsLocation['bedrijfPostcode'] . "'" . ", ";
	}
	$locations = substr($locations, 0, strlen($locations) - 2) . "]";

	$names = "[";
	foreach($mapsLocations as $name){
	    $names .= "'" . $name['voornaam'] . " " . $name['achternaam'] . "'" . ", ";
	}
	$names = substr($names, 0, strlen($names) - 2) . "]";

	$this->view->names = $names;
	$this->view->locations = $locations;
	$this->view->mapsLocations = $mapsLocations;
	$this->view->leraar = $leraar;
	$this->view->klassen = $klassen;
	$this->view->leerlingen = $leerlingen;
	$this->view->render('leraren');
    }

    function showStudent($leerlingNummer){
	$student = $this->model->getStudent($leerlingNummer);
	$afspraken = $this->model->afspraken($leerlingNummer);
	
	$locations = "[";
	foreach($student as $mapsLocation){
	    $locations .= "'" . $mapsLocation['bedrijfPostcode'] . "'" . ", ";
	}
	$locations = substr($locations, 0, strlen($locations) - 2) . "]";

	$names = "[";
	foreach($student as $name){
	    $names .= "'" . $name['voornaam'] . " " . $name['achternaam'] . "'" . ", ";
	}
	$names = substr($names, 0, strlen($names) - 2) . "]";
	
	$this->view->afspraken = $afspraken;
	$this->view->names = $names;
	$this->view->locations = $locations;
	$this->view->student = $student;
	$this->view->edit = false;
	$this->view->render('student');
    }

    function editPok($leerlingNummer){
	$student = $this->model->getStudent($leerlingNummer);
	$lastPok = $this->model->getLastPok();
	$locations = "[";
	foreach($student as $mapsLocation){
	    $locations .= "'" . $mapsLocation['bedrijfPostcode'] . "'" . ", ";
	}
	$locations = substr($locations, 0, strlen($locations) - 2) . "]";

	$names = "[";
	foreach($student as $name){
	    $names .= "'" . $name['voornaam'] . " " . $name['achternaam'] . "'" . ", ";
	}
	$names = substr($names, 0, strlen($names) - 2) . "]";
	
        $this->view->lastPok = $lastPok;
	$this->view->names = $names;
	$this->view->locations = $locations;
	$this->view->student = $student;
	$this->view->edit = true;
	$this->view->render('student');
    }

    function savePokChanges(){
	$this->model->savePokChanges();
    }

    function pokGoed($id){
	$this->model->pokGoed($id);
    }

    function caldav(){
	$this->model->caldav();
    }

}
