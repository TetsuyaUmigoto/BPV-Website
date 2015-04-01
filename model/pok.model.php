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
	$beginStage = strtotime($_POST['bpvPeriodeBegin']);
	$eindStage = strtotime($_POST['bpvPeriodeEind']);
	$beginStageDatum = date('Y-m-d', $beginStage);
	$eindStageDatum = date('Y-m-d', $eindStage);
	
	$sth = $this->dbh->prepare("INSERT INTO pokaanvraag (leerlingnummer, bedrijfNaam, bedrijfAdres, bedrijfPostcode, bedrijfPlaats, bedrijfTelefoon, bedrijfWebsite,
                                    bedrijfContactPersoon, bedrijfContactPersoonTelefoon, bedrijfContactPersoonEmail, bedrijfPraktijkBegeleider, bedrijfPraktijkBegeleiderTelefoon,
                                    bedrijfKennisCentrum, bedrijfCode, studentNaam, studentKlas, studentOpleiding, studentCreboNummerOpleiding, studentRichting, studentInleverdatum,
                                    bpvCoordinator, bpvBegeleider, bpvPeriodeBegin, bpvPeriodeEind, bpvSbu, bpvBrin, bpvCrebo, bpvOpmerking)
                                    VALUES (:leerlingnummer, :bedrijfNaam, :bedrijfAdres, :bedrijfPostcode, :bedrijfPlaats, :bedrijfTelefoon, :bedrijfWebsite,
                                    :bedrijfContactPersoon, :bedrijfContactPersoonTelefoon, :bedrijfContactPersoonEmail, :bedrijfPraktijkBegeleider, :bedrijfPraktijkBegeleiderTelefoon,
                                    :bedrijfKennisCentrum, :bedrijfCode, :studentNaam, :studentKlas, :studentOpleiding, :studentCreboNummerOpleiding, :studentRichting, :studentInleverdatum,
                                    :bpvCoordinator, :bpvBegeleider, :bpvPeriodeBegin, :bpvPeriodeEind, :bpvSbu, :bpvBrin, :bpvCrebo, :bpvOpmerking )");
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
            ':bpvPeriodeBegin' => $beginStageDatum, ':bpvPeriodeEind' => $eindStageDatum,
            ':bpvBrin' => $_POST['bpvBrin'], ':bpvCrebo' => $_POST['bpvCrebo'],
            ':bpvSbu' => $_POST['bpvSbu'], ':bpvOpmerking' => $_POST['bpvOpmerking']
        ));
	
	$sth = $this->dbh->prepare("INSERT INTO bedrijven (bedrijf_id, ref_nummer, soort, bedrijf_naam, Adres, Postcode, Plaats, Telefoonnummer, Website, Contactpersoon_telefoon,
				    Contactpersoon_email, Praktijkbegeleider, Praktijkbegeleider_telefoon)
				    VALUES (NULL, :ref_nummer, :soort, :bedrijf_naam, :Adres, :Postcode, :Plaats, :Telefoonnummer, :Website, :Contactpersoon_telefoon,
				    :Contactpersoon_email, :Praktijkbegeleider, :Praktijkbegeleider_telefoon)");
	$sth->execute(array(
	    ':ref_nummer' => $_POST['nummer'], ':soort' => $_POST['soort'],
	    ':bedrijf_naam' => $_POST['bedrijfNaam'], ':Adres' => $_POST['bedrijfAdres'],
	    ':Postcode' => $_POST['bedrijfPostcode'], ':Plaats' => $_POST['bedrijfPlaats'],
	    ':Telefoonnummer' => $_POST['bedrijfTelefoon'], ':Website' => $_POST['bedrijfWebsite'],
	    ':Contactpersoon_telefoon' => $_POST['bedrijfContactpersoonTelefoon'], ':Contactpersoon_email' => $_POST['bedrijfContactpersoonEmail'],
	    ':Praktijkbegeleider' => $_POST['bedrijfPraktijkbegeleider'], ':Praktijkbegeleider_telefoon' => $_POST['bedrijfPraktijkbegeleiderTelefoon']
	));

	header('location: '.URL.'studenten');
    }

}
