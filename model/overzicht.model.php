<?php

class Overzicht_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getBedrijven() {
        $sth = $this->dbh->prepare('SELECT * FROM bedrijven');
        $sth->execute();
        return $sth->fetchall();
 }

}
