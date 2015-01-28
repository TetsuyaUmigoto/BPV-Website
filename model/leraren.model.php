<?php

class Leraren_Model extends Model {

    public function __construct() {
        parent::__construct();
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
        $sth = $this->dbh->prepare("SELECT * FROM calender");
        $sth->execute();
        return $sth->fetchall();
    }
}