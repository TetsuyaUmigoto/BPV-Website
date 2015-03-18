<?php

class Studenten_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getStudentInfo($id) {
        $sth = $this->dbh->prepare('SELECT * FROM studenten WHERE leerlingnummer = "' . $id . '"');
        $sth->execute();
        return $sth->fetchall();
 }

    public function getPokInfo($id){
        $sth = $this->dbh->prepare('SELECT * FROM pokaanvraag WHERE leerlingnummer = "' . $id . '" ORDER BY id DESC LIMIT 1');
        $sth->execute();
        return $sth->fetchall();
    }
    
    public function pokAnnuleren(){
	$sth = $this->dbh->prepare('DELETE FROM pokaanvraag WHERE leerlingnummer = "' . $_SESSION['user_id'] . '" ORDER BY id DESC LIMIT 1');
	$sth->execute();
	header('location: '.URL.'studenten');
    }
 
}

