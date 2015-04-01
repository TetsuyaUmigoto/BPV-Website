<?php

class Leraren_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

	public function getKlassen(){
		$sth = $this->dbh->prepare("SELECT klas FROM studenten GROUP BY klas");
		$sth->execute();
		return $sth->fetchall();
	}

	public function getLeraar(){
		$sth = $this->dbh->prepare("SELECT voornaam, achternaam FROM leraren WHERE id = '" . $_SESSION['user_id'] . "'");
		$sth->execute();
		return $sth->fetchall();
	}

    public function getKlasLeerlingen($klas) {
		$sth = $this->dbh->prepare("SELECT studenten.*, pokaanvraag.id, pokaanvraag.pokStatus, pokaanvraag.leerlingnummer"
                . " FROM studenten LEFT OUTER JOIN pokaanvraag ON studenten.leerlingnummer = pokaanvraag.leerlingnummer"
                . " WHERE studenten.klas = '" . $klas . "' ORDER BY pokaanvraag.id DESC LIMIT 1");
        $sth->execute();
        return $sth->fetchall();
	}
	
    public function getAlliedLeerlingen($id) {
        $sth = $this->dbh->prepare("SELECT studenten.*, pokaanvraag.id, pokaanvraag.pokStatus, pokaanvraag.leerlingnummer"
                . " FROM studenten LEFT OUTER JOIN pokaanvraag ON studenten.leerlingnummer = pokaanvraag.leerlingnummer"
                . " WHERE leraar_id = " . $id . " ORDER BY pokaanvraag.id DESC LIMIT 1");
        $sth->execute();
        return $sth->fetchall();
    }
    
    function caldav(){
        $sth = $this->dbh->prepare("INSERT INTO calender (id, timestamp, afspraak, leerlingnummer)
        VALUES (NULL, :timestamp, :afspraak, :leerlingnummer )");
        $sth->execute(array(
            ':leerlingnummer' => $_POST['leerlingnummer'],
            ':afspraak' => $_POST['afspraak'],
            ':timestamp' => $_POST['tijd']
        ));
        header("location: ".URL."leraren");
    }
    
    function showCaldav() {
        $sth = $this->dbh->prepare("SELECT calender.*, studenten.voornaam, studenten.achternaam FROM calender LEFT 
        OUTER JOIN studenten on calender.leerlingnummer = studenten.leerlingnummer");
        $sth->execute();
        return $sth->fetchall();
    }
}
