<?php

class Bedrijf_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    function postComment() {
        $sth = $this->dbh->prepare("INSERT INTO comments (comment_id, bedrijf_id, leerlingnummer, comment, rating)
        VALUES (NULL, :bedrijf_id, :leerlingnummer, :comment, :rating )");
        $sth->execute(array(
            ':leerlingnummer' => $_POST['leerlingnummer'],
            ':comment' => $_POST['comment'],
            ':rating' => $_POST['rating'],
            ':bedrijf_id' => $_POST['bedrijf_id']
        ));
        header("location: ".URL."bedrijf/showBedrijf/" . $_POST['bedrijf_id']);
    }
    
    function showComment($id) {
        $sth = $this->dbh->prepare("SELECT * FROM comments"
                . " INNER JOIN studenten ON comments.leerlingnummer = studenten.leerlingnummer"
                 ." WHERE comments.bedrijf_id = '" . $id . "'");
        $sth->execute();
        return $sth->fetchall();
    }
    
    function getBedrijfInfo($id){
        $sth = $this->dbh->prepare("SELECT * FROM bedrijven WHERE bedrijf_id = '" . $id . "'");
        $sth->execute();
        return $sth->fetchall();
    }
    
    function getGemiddelde($id){
		$sth = $this->dbh->prepare("SELECT AVG(rating) AS gemiddelde FROM comments WHERE bedrijf_id = '" . $id . "'");
		$sth->execute();
		return $sth->fetchall();
	}
    
}
