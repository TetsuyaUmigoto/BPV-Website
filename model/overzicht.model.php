<?php

class Overzicht_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getBedrijven($query = null) {
		if($query == null){
			$sth = $this->dbh->prepare('SELECT * FROM bedrijven');
		} else{
			$sth = $this->dbh->prepare($query);
		}
        $sth->execute();
        return $sth->fetchall();
<<<<<<< HEAD
    }
=======
	}
>>>>>>> f844afecee39cd73688e6dc2b577d5f322e13f39

}
