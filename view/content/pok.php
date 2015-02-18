<!--
<div id="wrap">
    <div id="pok">
			<FORM METHOD="post" ACTION="" >
<DIV>
	<h3>Beroepspraktijkvorming biedende organisatie</h3>
		<table>	
			<tr><td>Bedrijfsnaam</td><td>:</td> <td> <input name="test1." type="text" size="30"value=""></td> </tr>
			<tr> <td>Adres </td>  <td>:</td> <td> <input name="test2" type="text" size="30"value=""></td> </tr>
			<tr> <td>Postcode </td>  <td>:</td> <td> <input name="test3" type="text" size="30"value=""></td> </tr>
			<tr> <td>Telefoon</td><td>:</td> <td> <input name="test4" type="text" size="30"value=""></td> </tr>
			<tr> <td>Website </td>  <td>:</td> <td> <input name="test5" type="text" size="30"value=""></td> </tr>

			<tr> <td>Contactpersoon+voorletters</td><td>:</td> <td> <input name="test6" type="text" size="30"value=""></td> </tr>
			<tr> <td>Contactpersoon telefoon</td><td>:</td> <td> <input name="test7" type="text" size="30"value=""></td> </tr>
			<tr> <td>Contactpersoon @-mail</td><td>:</td> <td> <input name="test8" type="text" size="30"value=""></td> </tr>
			<tr> <td>Praktijkbegeleider+ voorletter(s)</td><td>:</td> <td> <input name="test9" type="text" size="30"value=""></td> </tr>
			<tr> <td>Praktijkbegeleider telefoon </td>  <td>:</td> <td> <input name="test10" type="text" size="30"value=""></td> </tr>
			<tr><td>Kenniscentrum </td><td>:</td> <td> <input name="test11" type="text" size="30"value=""></td> </tr>
			<tr><td>Bedrijfscode van accreditatie </td><td>:</td> <td> <input name="test12" type="text" size="30"value=""></td> </tr>
		</table>
		<h3>Student</h3>
	<table>
		<tr><td>Naam</td><td>:</td><td><input name="tes13" type="text" size="30" value=""></td> </tr>
		<tr><td>Studentnummer <td>:</td><td><input name="test14" type="tex" size="30" value=""></td> </tr>
		<tr><td>Klascode</td> <td>:</td> <td><input name="test15" type="text" size="30" value=""></td> </tr>
		<tr><td>Opleidingsnaam</td><td>:</td><td><input name="test16" type="text" size="30" value=""></td> </tr>
		<tr><td>Crebonummer <td>:</td><td><input name="test17" type="text" size="30" value=""></td> </tr>
		<tr><td>BOL/BBL</td> <td>:</td> <td><input name="test18" type="text" size="30" value=""></td> </tr>
		<tr><td>Inleverdatum</td>  <td>:</td> <td> <input name="test19" type="text" size="30"value=""></td> </tr>			
		<tr> <td>Bpv-coördinator</td><td>:</td> <td> <input name="test20" type="text" size="30"value=""></td> </tr>
		<tr> <td>Stagebegeleider Landstede</td><td>:</td> <td> <input name="test21" type="text" size="30"value=""></td> </tr>
		<tr> <td>BPV-periode (data)</td><td>:</td> <td> <input name="test22" type="text" size="30"value=""></td> </tr>
		<tr> <td>Aantal sbu's</td><td>:</td> <td> <input name="test23" type="text" size="30"value=""></td> </tr>
		<tr> <td>Brinnummer</td><td>:</td> <td> <input name="test24" type="text" size="30"value=""></td> </tr>
		<tr> <td>Crebonummer</td><td>:</td> <td> <input name="test25" type="text" size="30"value=""></td> </tr>
		<tr> <td>Opmerking</td><td>:</td> <td> <input name="test26" type="text" size="30"value=""></td> </tr>
		</table>

	<br><br>
<input TYPE="reset" value="Formulier wissen">
<input TYPE="submit" value="Formulier insturen">
</DIV>
</FORM>

    </div>
</div>
-->
<?php
if(!isset($_POST['number'])){
    echo
	"<div>
	    Test nummer: 9812355<br>
	    <form action=". URL ."pok/crawl method='post'>
		Ecabo relatie nummer: <input type='text' name='number'>
	    </form>
	</div>";
}else{
    echo
	"<div>
	    <table class='table'>
		<tr><td><b>Bedrijfsgegevens:</b></tr></td>
		<form action=". URL ."pok/crawl method='post'>
		    <tr><td>Bedrijfsnaam:</td><td><input class='form-control' type='text' name='bedrijfNaam' value='".$this->bedrijfNaam."'></td></tr>
		    <tr><td>Adres:</td><td><input class='form-control' type='text' name='bedrijfAdres' value='".$this->bedrijfAdres."'></td></tr>
		    <tr><td>Postcode:</td><td><input class='form-control' type='text' name='bedrijfPostcode' value='".$this->bedrijfPostcode."'></td></tr>
		    <tr><td>Plaats:</td><td><input class='form-control' type='text' name='bedrijfPlaats' value='".$this->bedrijfPlaats."'></td></tr>
		    <tr><td>Telefoonnummer:</td><td><input class='form-control' type='text' name='bedrijfTelefoon' value='".$this->bedrijfTelefoon."'></td></tr>
		    <tr><td>Website:</td><td><input class='form-control' type='text' name='bedrijfWebsite' value='".$this->bedrijfWebsite."'></td></tr>
		    <tr><td>Contactpersoon + voorletter(s)(bekend bij kenniscentrum/ teken bevoegd:</td><td><input class='form-control' type='text' name='bedrijfContactpersoon' value='".$this->bedrijfContactPersoon."'></td></tr>
		    <tr><td>Contactpersoon telefoon:</td><td><input class='form-control' type='text' name='bedrijfContactpersoonTelefoon' value='".$this->bedrijfContactPersoonTelefoon."'></td></tr>
		    <tr><td>Contactpersoon @-mail:</td><td><input class='form-control' type='text' name='bedrijfContactpersoonEmail' value='".$this->bedrijfContactPersoonEmail."'></td></tr>
		    <tr><td>Praktijkbegeleider + voorletter(s):</td><td><input class='form-control' type='text' name='bedrijfPraktijkbegeleider' value='".$this->bedrijfPraktijkBegeleider."'></td></tr>
		    <tr><td>Praktijkbegeleider telefoon:</td><td><input class='form-control' type='text' name='bedrijfPraktijkbegeleiderTelefoon' value='".$this->bedrijfPraktijkBegeleiderTelefoon."'></td></tr>
		    <tr><td>Kenniscentrum:</td><td><input class='form-control' type='text' name='bedrijfKenniscentrum' value='".$this->bedrijfKennisCentrum."'></td></tr>
		    <tr><td>Bedrijfscode van accreditatie:</td><td><input class='form-control' type='text' name='bedrijfBedrijfscode' value='".$this->bedrijfCode."'></td></tr>
		<tr><td><b>Student gegevens:</b></tr></td>
		    Naam: <input type='text' name='studentNaam'><br>
		    Studentnummer: <input type='text' name='studentNummer'><br>
		    Klascode: <input type='text' name='studentKlas'><br>
		    Opleidingsnaam: <input type='text' name='studentOpleiding'><br>
		    Crebonummer Opleiding: <input type='text' name='studentCrebonummerOpleiding'><br>
		    BOL/BBL: <input type='text' name='studentRichting'><br>
		    Inleverdatum: <input type='text' name='studentInleverdatum'><br>

		    BPV-Coördinator: <input type='text' name='bpvCoordinator'><br>
		    Stagebegeleider Landstede: <input type='text' name='bpvBegeleider'><br>
		    BPV-periode (data): <input type='text' name='bpvPeriode'><br>
		    Aantal sbu’s: <input type='text' name='bpvSbu'><br>
		    Brinnummer: <input type='text' name='bpvBrin'><br>
		    Crebonummer: <input type='text' name='bpvCrebo'><br>
		    Opmerkingen: <input type='text' name='bpvOpmerking'><br>
		</form>
	    </table>
	</div>";
}

