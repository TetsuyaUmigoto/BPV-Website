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

}

