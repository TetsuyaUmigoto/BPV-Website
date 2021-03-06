<?php

class Leraren_Model extends Model{

    public function __construct(){
	parent::__construct();
    }

    public function getMapsLocations($klasNaam){
	$date = time();
	$sth = $this->dbh->prepare("SELECT studenten.voornaam, studenten.achternaam, studenten.leerlingnummer,
		pokaanvraag.leerlingnummer, pokaanvraag.bedrijfPostcode, pokaanvraag.bpvPeriodeBegin, pokaanvraag.bpvPeriodeEind
		FROM studenten LEFT OUTER JOIN pokaanvraag ON studenten.leerlingnummer = pokaanvraag.leerlingnummer
		WHERE " . $date . " >= pokaanvraag.bpvPeriodeBegin AND " . $date . " <= pokaanvraag.bpvPeriodeEind AND pokaanvraag.pokStatus = 3");
	$sth->execute();
	return $sth->fetchall();
    }

    public function getKlassen(){
	$sth = $this->dbh->prepare("SELECT klas FROM studenten GROUP BY klas");
	$sth->execute();
	return $sth->fetchall();
    }

    public function getLeraar(){
	$sth = $this->dbh->prepare("SELECT leraar_voornaam, leraar_achternaam FROM leraren WHERE id = '" . $_SESSION['user_id'] . "'");
	$sth->execute();
	return $sth->fetchall();
    }

    public function getLastPok(){
        $sth = $this->dbh->prepare("SELECT * FROM pokaanvraag ORDER BY id DESC LIMIT 1");
	$sth->execute();
	return $sth->fetchall();
    }
    
    public function getKlasLeerlingen($klas){
	$sth = $this->dbh->prepare("SELECT studenten.*, pokaanvraag.id, pokaanvraag.pokStatus, pokaanvraag.leerlingnummer, pokaanvraag.bedrijfNaam, pokaanvraag.bedrijfPlaats"
		. " FROM studenten LEFT OUTER JOIN pokaanvraag ON studenten.leerlingnummer = pokaanvraag.leerlingnummer"
		. " WHERE studenten.klas = :klas ORDER BY studenten.achternaam ASC");
	$sth->execute(array(
	    ':klas' => $klas
	));
	return $sth->fetchall();
    }

    public function getAlliedLeerlingen($id){
	$sth = $this->dbh->prepare("SELECT studenten.*, pokaanvraag.id, pokaanvraag.pokStatus, pokaanvraag.leerlingnummer, pokaanvraag.bedrijfPostcode"
		. " FROM studenten LEFT OUTER JOIN pokaanvraag ON studenten.leerlingnummer = pokaanvraag.leerlingnummer"
		. " WHERE leraar_id = " . $id . " ORDER BY pokaanvraag.id DESC");
	$sth->execute();
	return $sth->fetchall();
    }

    public function caldav(){
	$date = strtotime($_POST['tijd']);
	$sth = $this->dbh->prepare("INSERT INTO calender (id, timestamp, afspraak, leerlingnummer, leraren_id)
		VALUES (NULL, :timestamp, :afspraak, :leerlingnummer, :leraren_id)");
	$sth->execute(array(
	    ':leerlingnummer' => $_POST['leerlingnummer'],
	    ':afspraak' => $_POST['afspraak'],
	    ':timestamp' => $date + 7200,
	    ':leraren_id' => $_SESSION['user_id']
	));
	header("location: " . URL . "leraren");
    }

    public function getStudent($leerlingNummer){
	$sth = $this->dbh->prepare("SELECT studenten.*, leraren.*, pokaanvraag.* "
		. "			FROM studenten"
		. "			    JOIN leraren ON"
		. "				studenten.leraar_id = leraren.id"
		. "			    JOIN pokaanvraag ON"
		. "				studenten.leerlingnummer = pokaanvraag.leerlingnummer"
		. "			WHERE studenten.leerlingnummer = ? "
		. "			ORDER BY pokaanvraag.id DESC LIMIT 1");
	$sth->execute(array(
	    $leerlingNummer
	));
	return $sth->fetchall();
    }

    public function savePokChanges(){
	$beginStage = strtotime($_POST['bpvPeriodeBegin']);
	$eindStage = strtotime($_POST['bpvPeriodeEind']);

	$sth = $this->dbh->prepare("UPDATE pokaanvraag SET bedrijfNaam = :bedrijfNaam, bedrijfAdres = :bedrijfAdres, bedrijfPostcode = :bedrijfPostcode, bedrijfPlaats = :bedrijfPlaats,
                                    bedrijfTelefoon = :bedrijfTelefoon, bedrijfWebsite = :bedrijfWebsite, bedrijfContactPersoon = :bedrijfContactPersoon, bedrijfContactPersoonTelefoon = :bedrijfContactPersoonTelefoon,
                                    bedrijfContactPersoonEmail = :bedrijfContactPersoonEmail, bedrijfPraktijkBegeleider = :bedrijfPraktijkBegeleider, bedrijfPraktijkBegeleiderTelefoon = :bedrijfPraktijkBegeleiderTelefoon,
                                    bedrijfKennisCentrum = :bedrijfKennisCentrum, bedrijfCode = :bedrijfCode, studentNaam = :studentNaam, studentKlas = :studentKlas, studentOpleiding = :studentOpleiding,
                                    studentCreboNummerOpleiding = :studentCreboNummerOpleiding, studentRichting = :studentRichting, studentInleverdatum = :studentInleverdatum, onderwijsBegeleider = :onderwijsBegeleider,
                                    vertegenwoordigerLandstede = :vertegenwoordigerLandstede, bpvPeriodeBegin = :bpvPeriodeBegin, bpvPeriodeEind = :bpvPeriodeEind, bpvSbu = :bpvSbu, werkprocessen = :werkprocessen, begeleidingTeam = :begeleidingTeam,
                                    begeleidingBedrijf = :begeleidingBedrijf WHERE leerlingnummer = :leerlingnummer ORDER BY id DESC LIMIT 1");
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
	    ':vertegenwoordigerLandstede' => $_POST['vertegenwoordigerLandstede'], ':onderwijsBegeleider' => $_POST['onderwijsBegeleider'],
	    ':bpvPeriodeBegin' => $beginStage, ':bpvPeriodeEind' => $eindStage,
	    ':werkprocessen' => $_POST['werkprocessen'], ':begeleidingTeam' => $_POST['begeleidingTeam'],
	    ':bpvSbu' => $_POST['bpvSbu'], ':begeleidingBedrijf' => $_POST['begeleidingBedrijf']
	));
	header("location: " . URL . "leraren");
    }

    public function pokGoed($id){
	$sth = $this->dbh->prepare("UPDATE pokaanvraag SET pokStatus = 1 WHERE id = :id");
	$sth->execute(array(
	    ':id' => $id
	));
	header("location: " . URL . "leraren");
    }

    public function afspraken($leerlingNummer){
	$sth = $this->dbh->prepare("SELECT * FROM calender WHERE leerlingnummer = :leerlingnummer");
	$sth->execute(array(
	    ':leerlingnummer' => $leerlingNummer
	));
	
	return $sth->fetchall();
    }

}
