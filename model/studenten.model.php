<?php

class Studenten_Model extends Model{

    public function __construct(){
	parent::__construct();
    }

    public function getStudentInfo($id){
	$sth = $this->dbh->prepare('SELECT * FROM studenten 
									JOIN leraren ON studenten.leraar_id = leraren.id 
									JOIN comments ON comments.leerlingnummer = studenten.leerlingnummer
									WHERE studenten.leerlingnummer = "' . $id . '"');
	$sth->execute();
	return $sth->fetchall();
    }

    public function getPokInfo($id){
	$sth = $this->dbh->prepare('SELECT * FROM pokaanvraag WHERE leerlingnummer = "' . $id . '" AND pokstatus != "4" ORDER BY id DESC LIMIT 1');
	$sth->execute();
	return $sth->fetchall();
    }

    public function getAfspraak($id){
	$sth = $this->dbh->prepare('SELECT * FROM calender WHERE leerlingnummer = "' . $id . '"');
	$sth->execute();
	return $sth->fetchall();
    }

    public function pokAnnuleren(){
	$sth = $this->dbh->prepare('UPDATE pokaanvraag SET pokstatus = "4" WHERE leerlingnummer = "' . $_SESSION['user_id'] . '" ORDER BY id DESC LIMIT 1');
	$sth->execute();
	header('location: ' . URL . 'studenten');
    }

}
