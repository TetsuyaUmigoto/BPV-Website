<?php

class Overzicht_Model extends Model {

public function __construct() {
parent::__construct();
}

public function getBedrijven($query = null) {
if($query == null){
$sth = $this->dbh->prepare('SELECT * FROM (SELECT * FROM bedrijven ORDER BY bedrijf_id DESC) x GROUP BY ref_nummer ORDER BY bedrijf_id ASC');
} else{
$sth = $this->dbh->prepare($query);
}
$sth->execute();
return $sth->fetchall();
}
}
