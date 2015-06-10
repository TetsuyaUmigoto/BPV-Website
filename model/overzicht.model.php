<?php

class Overzicht_Model extends Model{

    public function __construct(){
	parent::__construct();
    }

    public function getBedrijven(){
	$sth = $this->dbh->prepare('SELECT * FROM (SELECT * FROM bedrijven ORDER BY bedrijf_id DESC) x GROUP BY ref_nummer ORDER BY bedrijf_id ASC');
	$sth->execute();
	return $sth->fetchall();
    }

    public function getBedrijf(){
	$sth = $this->dbh->prepare("SELECT * FROM bedrijven WHERE bedrijf_naam LIKE '%" . $_GET['naam'] . "%'
			AND soort LIKE '%" . $_GET['soort'] . "%' AND Plaats LIKE '%" . $_GET['plaats'] . "%' GROUP BY ref_nummer ORDER BY bedrijf_id ASC");
	$sth->execute();
	return $sth->fetchall();
    }

}
