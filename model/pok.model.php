<?php

class Pok_Model extends Model{

    public function __construct(){
	parent::__construct();
    }
    
    function studentGegevens(){
        $sth = $this->dbh->prepare("SELECT * FROM studenten WHERE leerlingnummer = :user_id");
        $sth->execute(array(
            ':user_id' => $_SESSION['user_id']
        ));
        return $sth->fetchall();
    }

    function pokAanvraag(){
	$sth = $this->dbh->prepare("INSERT INTO pokaanvraag (leerlingnummer, bedrijfNaam, bedrijfAdres, bedrijfPostcode, bedrijfPlaats, bedrijfTelefoon, bedrijfWebsite,
                                    bedrijfContactPersoon, bedrijfContactPersoonTelefoon, bedrijfContactPersoonEmail, bedrijfPraktijkBegeleider, bedrijfPraktijkBegeleiderTelefoon,
                                    bedrijfKennisCentrum, bedrijfCode, studentNaam, studentKlas, studentOpleiding, studentCreboNummerOpleiding, studentRichting, studentInleverdatum,
                                    bpvCoordinator, bpvBegeleider, bpvPeriode, bpvSbu, bpvBrin, bpvCrebo, bpvOpmerking)
                                    VALUES (:leerlingnummer, :bedrijfNaam, :bedrijfAdres, :bedrijfPostcode, :bedrijfPlaats, :bedrijfTelefoon, :bedrijfWebsite,
                                    :bedrijfContactPersoon, :bedrijfContactPersoonTelefoon, :bedrijfContactPersoonEmail, :bedrijfPraktijkBegeleider, :bedrijfPraktijkBegeleiderTelefoon,
                                    :bedrijfKennisCentrum, :bedrijfCode, :studentNaam, :studentKlas, :studentOpleiding, :studentCreboNummerOpleiding, :studentRichting, :studentInleverdatum,
                                    :bpvCoordinator, :bpvBegeleider, :bpvPeriode, :bpvSbu, :bpvBrin, :bpvCrebo, :bpvOpmerking )");
	$sth->execute(array(
            ':leerlingnummer' => $_POST['studentNummer'], ':bedrijfNaam' => $_POST['bedrijfNaam'],
            ':bedrijfAdres' => $_POST['bedrijfAdres'], ':bedrijfPostcode' => $_POST['bedrijfPostcode'],
            ':bedrijfPlaats' => $_POST['bedrijfPlaats'], ':bedrijfTelefoon' => $_POST['bedrijfTelefoon'],
            ':bedrijfWebsite' => $_POST['bedrijfWebsite'], ':bedrijfContactPersoon' => $_POST['bedrijfContactpersoon'],
            ':bedrijfContactPersoonTelefoon' => $_POST['bedrijfContactpersoonTelefoon'], ':bedrijfContactPersoonEmail' => $_POST['bedrijfContactpersoonEmail'],
            ':bedrijfPraktijkBegeleider' => $_POST['bedrijfPraktijkbegeleider'], ':bedrijfPraktijkBegeleiderTelefoon' => $_POST['bedrijfPraktijkbegeleiderTelefoon'],
            ':bedrijfKennisCentrum' => $_POST['bedrijfKenniscentrum'], ':bedrijfCode' => $_POST['bedrijfBedrijfscode'],
            ':studentNaam' => $_POST['studentNaam'], ':studentKlas' => $_POST['studentKlas'],
            ':studentOpleiding' => $_POST['studentOpleiding'], ':studentCreboNummerOpleiding' => $_POST['studentCrebonummerOpleiding'],
            ':studentRichting' => $_POST['studentRichting'], ':studentInleverdatum' => $_POST['studentInleverdatum'],
            ':bpvCoordinator' => $_POST['bpvCoordinator'], ':bpvBegeleider' => $_POST['bpvBegeleider'],
            ':bpvPeriode' => $_POST['bpvPeriode'], ':bpvSbu' => $_POST['bpvSbu'],
            ':bpvBrin' => $_POST['bpvBrin'], ':bpvCrebo' => $_POST['bpvCrebo'],
            ':bpvOpmerking' => $_POST['bpvOpmerking']
        ));
    }

}
