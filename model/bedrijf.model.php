<?php

class Bedrijf_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    function postComment() {
        $sth = $this->dbh->prepare("INSERT INTO comments (comment_id, leerlingnummer, comment, rating)
        VALUES (NULL, :leerlingnummer, :comment, :rating )");
        $sth->execute(array(
            ':leerlingnummer' => $_POST['leerlingnummer'],
            ':comment' => $_POST['comment'],
            ':rating' => $_POST['rating']
        ));
        header("location: ".URL."bedrijf");
    }

}
