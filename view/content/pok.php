<div id="pokform">
	<?php
if(isset($this->studentData)){
    foreach($this->studentData as $row){
        $naam = $row['voornaam'];
        $naam .= " ";
        $naam .= $row['achternaam'];
        $leerlingNummer = $row['leerlingnummer'];
        $klas = $row['klas'];
    }
}
if(isset($this->ecabo)){
	echo
	"<div class='formpokhead'> <h3>Voer je ecabo nummer in.</h3></div>
	<div  id='pokform1'>
	    Test nummer: 9812355<br>
	    <form action='" . URL . "pok/crawl' method='post'>
		Ecabo relatie nummer: <input id='input-tekst' type='text' name='number'>
		<input type='submit' value='POK'>
	    </form>
	</div>";
}else if(isset($this->goc)){
    echo
	"<div>
	    <table class='table'>
		<tr><td><b>Bedrijfsgegevens:</b></tr></td>
		<form action=" . URL . "pok/crawl method='post'>
		    <tr><td>Bedrijfsnaam:</td><td><input class='form-control' type='text' name='bedrijfNaam'></td></tr>
		    <tr><td>Adres:</td><td><input class='form-control' type='text' name='bedrijfAdres'></td></tr>
		    <tr><td>Postcode:</td><td><input class='form-control' type='text' name='bedrijfPostcode'></td></tr>
		    <tr><td>Plaats:</td><td><input class='form-control' type='text' name='bedrijfPlaats'></td></tr>
		    <tr><td>Telefoonnummer:</td><td><input class='form-control' type='text' name='bedrijfTelefoon'></td></tr>
		    <tr><td>Website:</td><td><input class='form-control' type='text' name='bedrijfWebsite'></td></tr>
		    <tr><td>Contactpersoon + voorletter(s)(bekend bij kenniscentrum/ teken bevoegd:</td><td><input class='form-control' type='text' name='bedrijfContactpersoon'></td></tr>
		    <tr><td>Contactpersoon telefoon:</td><td><input class='form-control' type='text' name='bedrijfContactpersoonTelefoon'></td></tr>
		    <tr><td>Contactpersoon @-mail:</td><td><input class='form-control' type='text' name='bedrijfContactpersoonEmail'></td></tr>
		    <tr><td>Praktijkbegeleider + voorletter(s):</td><td><input class='form-control' type='text' name='bedrijfPraktijkbegeleider'></td></tr>
		    <tr><td>Praktijkbegeleider telefoon:</td><td><input class='form-control' type='text' name='bedrijfPraktijkbegeleiderTelefoon'></td></tr>
		    <tr><td>Kenniscentrum:</td><td><input class='form-control' type='text' name='bedrijfKenniscentrum'></td></tr>
		    <tr><td>Bedrijfscode van accreditatie:</td><td><input class='form-control' type='text' name='bedrijfBedrijfscode'></td></tr>
		<tr><td><b>Student gegevens:</b></tr></td>
		    <tr><td>Naam:</td><td><input class='form-control' type='text' name='studentNaam'></td></tr>
		    <tr><td>Studentnummer:</td><td><input class='form-control' type='text' name='studentNummer'></td></tr>
		    <tr><td>Klascode:</td><td><input class='form-control' type='text' name='studentKlas'></td></tr>
		    <tr><td>Opleidingsnaam:</td><td><input class='form-control' type='text' name='studentOpleiding'></td></tr>
		    <tr><td>Crebonummer Opleiding:</td><td><input class='form-control' type='text' name='studentCrebonummerOpleiding'></td></tr>
		    <tr><td>BOL/BBL:</td><td><input class='form-control' type='text' name='studentRichting'></td></tr>
		    <tr><td>Inleverdatum:</td><td><input class='form-control' type='text' name='studentInleverdatum'></td></tr>

		    <tr><td>BPV-Coördinator:</td><td><input class='form-control' type='text' name='bpvCoordinator'></td></tr>
		    <tr><td>Stagebegeleider Landstede:</td><td><input class='form-control' type='text' name='bpvBegeleider'></td></tr>
		    <tr><td>BPV-periode (data):</td><td><input class='form-control' type='text' name='bpvPeriode'></td></tr>
		    <tr><td>Aantal sbu’s:</td><td><input class='form-control' type='text' name='bpvSbu'></td></tr>
		    <tr><td>Brinnummer:</td><td><input class='form-control' type='text' name='bpvBrin'></td></tr>
		    <tr><td>Crebonummer:</td><td><input class='form-control' type='text' name='bpvCrebo'></td></tr>
		    <tr><td>Opmerkingen:</td><td><input class='form-control' type='text' name='bpvOpmerking'></td></tr>
		</form>
	    </table>
	</div>";
}else if(isset($_POST['number'])){
    echo
	"<div>
	    <table class='table'>
		<tr><td><b>Bedrijfsgegevens:</b></tr></td>
		<form action=" . URL . "pok/pokAanvraag method='post'>
		    <tr><td>Bedrijfsnaam:</td><td><input class='form-control' type='text' name='bedrijfNaam' value='" . $this->bedrijfNaam . "'></td></tr>
		    <tr><td>Adres:</td><td><input class='form-control' type='text' name='bedrijfAdres' value='" . $this->bedrijfAdres . "'></td></tr>
		    <tr><td>Postcode:</td><td><input class='form-control' type='text' name='bedrijfPostcode' value='" . $this->bedrijfPostcode . "'></td></tr>
		    <tr><td>Plaats:</td><td><input class='form-control' type='text' name='bedrijfPlaats' value='" . $this->bedrijfPlaats . "'></td></tr>
		    <tr><td>Telefoonnummer:</td><td><input class='form-control' type='text' name='bedrijfTelefoon' value='" . $this->bedrijfTelefoon . "'></td></tr>
		    <tr><td>Website:</td><td><input class='form-control' type='text' name='bedrijfWebsite' value='" . $this->bedrijfWebsite . "'></td></tr>
		    <tr><td>Contactpersoon + voorletter(s)(bekend bij kenniscentrum/ teken bevoegd:</td><td><input class='form-control' type='text' name='bedrijfContactpersoon' value='" . $this->bedrijfContactPersoon . "'></td></tr>
		    <tr><td>Contactpersoon telefoon:</td><td><input class='form-control' type='text' name='bedrijfContactpersoonTelefoon' value='" . $this->bedrijfContactPersoonTelefoon . "'></td></tr>
		    <tr><td>Contactpersoon @-mail:</td><td><input class='form-control' type='text' name='bedrijfContactpersoonEmail' value='" . $this->bedrijfContactPersoonEmail . "'></td></tr>
		    <tr><td>Praktijkbegeleider + voorletter(s):</td><td><input class='form-control' type='text' name='bedrijfPraktijkbegeleider' value='" . $this->bedrijfPraktijkBegeleider . "'></td></tr>
		    <tr><td>Praktijkbegeleider telefoon:</td><td><input class='form-control' type='text' name='bedrijfPraktijkbegeleiderTelefoon' value='" . $this->bedrijfPraktijkBegeleiderTelefoon . "'></td></tr>
		    <tr><td>Kenniscentrum:</td><td><input class='form-control' type='text' name='bedrijfKenniscentrum' value='" . $this->bedrijfKennisCentrum . "'></td></tr>
		    <tr><td>Bedrijfscode van accreditatie:</td><td><input class='form-control' type='text' name='bedrijfBedrijfscode' value='" . $this->bedrijfCode . "'></td></tr>
		<tr><td><b>Student gegevens:</b></tr></td>
		    <tr><td>Naam:</td><td><input class='form-control' type='text' name='studentNaam' value='" . $naam . "'></td></tr>
		    <tr><td>Studentnummer:</td><td><input class='form-control' type='text' name='studentNummer' value='" . $leerlingNummer . "'></td></tr>
		    <tr><td>Klascode:</td><td><input class='form-control' type='text' name='studentKlas' value='" . $klas . "'></td></tr>
		    <tr><td>Opleidingsnaam:</td><td><input class='form-control' type='text' name='studentOpleiding'></td></tr>
		    <tr><td>Crebonummer Opleiding:</td><td><input class='form-control' type='text' name='studentCrebonummerOpleiding'></td></tr>
		    <tr><td>BOL/BBL:</td><td><input class='form-control' type='text' name='studentRichting'></td></tr>
		    <tr><td>Inleverdatum:</td><td><input class='form-control' type='text' name='studentInleverdatum'></td></tr>
		    <input type='hidden' name='nummer' value='".$_POST['number']."'>
		    <input type='hidden' name='soort' value='0'>
                    <tr><td><input class='form-control' type='submit' name='pokAanvraag' value='Pok Aanvraag'></td></tr>
		</form>
	    </table>
	</div>";
}else{
    echo
	"<form action='" . URL . "pok/crawl' method='post'>
	    <input type='submit' name='ecabo' value='Ecabo'>
	    <input type='submit' name='goc' value='GOC'>
	</form>";
} 
?>
</div>