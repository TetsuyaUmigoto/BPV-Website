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
}
}
