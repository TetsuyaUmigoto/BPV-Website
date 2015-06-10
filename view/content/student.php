<div id="map" class='kutmap' style="width: 500px; height: 400px;">

</div>
<script type="text/javascript"
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGBByvGgOTRGqO-ZB1hVoAeVZGjm6UoTM">
</script>
<script type="text/javascript">
    var delay = 100;
    var infowindow = new google.maps.InfoWindow();
    var latlng = new google.maps.LatLng(52.527978100000000000, 5.995350800000006000);
    var names = <?php echo $this->names ?>;
    var locations = <?php echo $this->locations ?>;
    var nextAddress = 0;
    var mapOptions = {
	zoom: 6,
	center: latlng,
	mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var geocoder = new google.maps.Geocoder();
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    var bounds = new google.maps.LatLngBounds();

    function geocodeAddress(address, next, names) {
	geocoder.geocode({address: address}, function (results, status) {
	    if (status == google.maps.GeocoderStatus.OK) {
		var p = results[0].geometry.location;
		var lat = p.lat();
		var lng = p.lng();
		createMarker(names, lat, lng);
	    } else {
		if (status == google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
		    nextAddress--;
		    delay++;
		}
	    }
	    next();
	});
    }

    function createMarker(add, lat, lng) {
	var contentString = add;
	var marker = new google.maps.Marker({
	    position: new google.maps.LatLng(lat, lng),
	    map: map
	});
	google.maps.event.addListener(marker, 'mouseover', function () {
	    infowindow.setContent(contentString);
	    infowindow.open(map, marker);
	});
	bounds.extend(marker.position);
    }

    function theNext() {
	if (nextAddress < locations.length) {
	    setTimeout('geocodeAddress("' + locations[nextAddress] + '",theNext,"' + names[nextAddress] + '")', delay);
	    nextAddress++;
	}
    }
    theNext();
</script>
<form action='<?php echo URL ?>leraren/caldav' method='post'>
    <input type='hidden' class='form-control' name='leerlingnummer' value='<?php echo $this->student[0]['leerlingnummer'] ?>'>
    <p class="formulier">Afspraak:</p><input type='text' class='form-control' name='afspraak'>
    <p class="formulier">Datum:</p><input type='date' class='form-control' name='tijd'>
    <input type='submit' class='btn btn-primary' value='Create!'>
</form>
<div id="klassen">
    <div id="klassen1">
	<h3>
	    Student
	</h3>
    </div>
    <table class='haai'>
	<tr>
	    <td>
		Leerlingnummer
	    </td>
	    <td>
		<?php
		echo $this->student[0]["leerlingnummer"];
		?>
	    </td>
	</tr>
	<tr>
	    <td>
		Naam
	    </td>
	    <td>
		<?php
		echo $this->student[0]["voornaam"] . " " . $this->student[0]["achternaam"];
		?>
	    </td>
	</tr>
	<tr>
	    <td>
		Email
	    </td>
	    <td>
		<?php
		echo $this->student[0]["email"];
		?>
	    </td>
	</tr>
	<tr>
	    <td>
		Website
	    </td>
	    <td>
		<a href='http://<?php echo $this->student[0]["voornaam"][0] . $this->student[0]["achternaam"]; ?>.newdeveloper.nl' target='_blank'><?php echo $this->student[0]["voornaam"][0] . $this->student[0]["achternaam"]; ?>.newdeveloper.nl</a><br>
	    </td>
	</tr>
	<tr>
	    <td>
		Tel. Nummer
	    </td>
	    <td>
		<?php
		echo $this->student[0]["telefoonnummer"];
		?>
	    </td>
	</tr>
	<tr>
	    <td>
		Klas
	    </td>
	    <td>
		<?php
		echo $this->student[0]["klas"];
		?>
	    </td>
	</tr>
	<tr>
	    <td>
		Leraar
	    </td>
	    <td>
		<?php
		echo $this->student[0][10]. ' ' .$this->student[0][11];
		?>
	    </td>
	</tr>
    </table>
    <h4>
		Afspraken (<?php if(isset($this->afspraken)){echo $this->afspraken[0];}else{echo '0';} ?>)
	    </h4>
	    <?php
	    if(isset($this->afspraken)){
		foreach($this->afspraken as $afspraak){
		    for($i = 0; $i < count($afspraak); $i++){
			echo $afspraak[$i]['afspraak']." ".$afspraak[$i]['timestamp']."<br>";
		    }
		}
	    }else{
	    }
	    ?>
</div>
<div id="stage">
    <div id="stage1">
	<h3>
	    POK Gegevens
	</h3>
    </div>
    <?php
        if($this->edit == false){
            echo
                "<table class='table'>
                    <tr><td><b>Bedrijfsgegevens:</b></tr></td>
		    <tr><td>Bedrijfsnaam:</td><td>".$this->student[0]['bedrijfNaam']."</td></tr>
		    <tr><td>Adres:</td><td>".$this->student[0]['bedrijfAdres']."</td></tr>
		    <tr><td>Postcode:</td><td>".$this->student[0]['bedrijfPostcode']."</td></tr>
		    <tr><td>Plaats:</td><td>".$this->student[0]['bedrijfPlaats']."</td></tr>
		    <tr><td>Telefoonnummer:</td><td>".$this->student[0]['bedrijfTelefoon']."</td></tr>
		    <tr><td>Website:</td><td>".$this->student[0]['bedrijfWebsite']."</td></tr>
		    <tr><td>Contactpersoon + voorletter(s)(bekend bij kenniscentrum/ teken bevoegd:</td><td>".$this->student[0]['bedrijfContactPersoon']."</td></tr>
		    <tr><td>Contactpersoon telefoon:</td><td>".$this->student[0]['bedrijfContactPersoonTelefoon']."</td></tr>
		    <tr><td>Contactpersoon @-mail:</td><td>".$this->student[0]['bedrijfContactPersoonEmail']."</td></tr>
		    <tr><td>Praktijkbegeleider + voorletter(s):</td><td>".$this->student[0]['bedrijfPraktijkBegeleider']."</td></tr>
		    <tr><td>Praktijkbegeleider telefoon:</td><td>".$this->student[0]['bedrijfPraktijkBegeleiderTelefoon']."</td></tr>
		    <tr><td>Kenniscentrum:</td><td>".$this->student[0]['bedrijfKennisCentrum']."</td></tr>
		    <tr><td>Bedrijfscode van accreditatie:</td><td>".$this->student[0]['bedrijfCode']."</td></tr>
                    <tr><td><b>Student gegevens:</b></tr></td>
		    <tr><td>Naam:</td><td>".$this->student[0]['voornaam'] . " " . $this->student[0]['achternaam']."</td></tr>
		    <tr><td>Studentnummer:</td><td>".$this->student[0]['leerlingnummer']."</td></tr>
		    <tr><td>Klascode:</td><td>".$this->student[0]['klas']."</td></tr>
		    <tr><td>Opleidingsnaam:</td><td>".$this->student[0]['studentOpleiding']."</td></tr>
		    <tr><td>Crebonummer Opleiding:</td><td>".$this->student[0]['studentCreboNummerOpleiding']."</td></tr>
		    <tr><td>BOL/BBL:</td><td>".$this->student[0]['studentRichting']."</td></tr>
		    <tr><td>Inleverdatum:</td><td>".$this->student[0]['studentInleverdatum']."</td></tr>
		    <tr><td><b>In te vullen door BPV-coördinator van team/opleiding:</b></td></tr>
		    <tr><td>Onderwijsbegeleider:</td><td>".$this->student[0]['onderwijsBegeleider']."</td></tr>
		    <tr><td>Rechtsgeldig vertegenwoordiger Landstede/ teken bevoegd:</td><td>".$this->student[0]['vertegenwoordigerLandstede']."</td></tr>
		    <tr><td>BPV-periode-begin (Bijv: yyyy-mm-dd):</td><td>".date("Y-m-d", $this->student[0]['bpvPeriodeBegin'])."</td></tr>
		    <tr><td>BPV-periode-eind (Bijv: yyyy-mm-dd):</td><td>".date("Y-m-d", $this->student[0]['bpvPeriodeEind'])."</td></tr>
		    <tr><td>Aantal sbu’s:</td><td>".$this->student[0]['bpvSbu']."</td></tr>
		    <tr><td>Welke kerntaken/werkprocessen gaan in deze BPV-periode beoordeeld worden:</td><td>".$this->student[0]['werkprocessen']."</td></tr>
		    <tr><td>Hoe vindt de begeleiding door de team plaats:</td><td>".$this->student[0]['begeleidingTeam']."</td></tr>
		    <tr><td>Hoe vindt de begeleiding door het bedrijf plaats:</td><td>".$this->student[0]['begeleidingBedrijf']."</td></tr>
                </table>
                <a href='" . URL . "leraren/editPok/" . $this->student[0]['leerlingnummer'] . "'>Edit</a>
		<a href='" . URL . "leraren/pokGoed/" . $this->student[0]['id'] . "'>Klopt</a>";
        }else{
            echo
                "<table class='table'>
                    <form action=" . URL . "leraren/savePokChanges method='post'>
                        <tr><td><b>Bedrijfsgegevens:</b></tr></td>
                        <tr><td>Bedrijfsnaam:</td><td><input class='form-control' type='text' name='bedrijfNaam' value='".$this->student[0]['bedrijfNaam']."'</td></tr>
                        <tr><td>Adres:</td><td><input class='form-control' type='text' name='bedrijfAdres' value='".$this->student[0]['bedrijfAdres']."'</td></tr>
                        <tr><td>Postcode:</td><td><input class='form-control' type='text' name='bedrijfPostcode' value='".$this->student[0]['bedrijfPostcode']."'</td></tr>
                        <tr><td>Plaats:</td><td><input class='form-control' type='text' name='bedrijfPlaats' value='".$this->student[0]['bedrijfPlaats']."'</td></tr>
                        <tr><td>Telefoonnummer:</td><td><input class='form-control' type='text' name='bedrijfTelefoon' value='".$this->student[0]['bedrijfTelefoon']."'</td></tr>
                        <tr><td>Website:</td><td><input class='form-control' type='text' name='bedrijfWebsite' value='".$this->student[0]['bedrijfWebsite']."'</td></tr>
                        <tr><td>Contactpersoon + voorletter(s)(bekend bij kenniscentrum/ teken bevoegd:</td><td><input class='form-control' type='text' name='bedrijfContactpersoon' value='".$this->student[0]['bedrijfContactPersoon']."'</td></tr>
                        <tr><td>Contactpersoon telefoon:</td><td><input class='form-control' type='text' name='bedrijfContactpersoonTelefoon' value='".$this->student[0]['bedrijfContactPersoonTelefoon']."'</td></tr>
                        <tr><td>Contactpersoon @-mail:</td><td><input class='form-control' type='text' name='bedrijfContactpersoonEmail' value='".$this->student[0]['bedrijfContactPersoonEmail']."'</td></tr>
                        <tr><td>Praktijkbegeleider + voorletter(s):</td><td><input class='form-control' type='text' name='bedrijfPraktijkbegeleider' value='".$this->student[0]['bedrijfPraktijkBegeleider']."'</td></tr>
                        <tr><td>Praktijkbegeleider telefoon:</td><td><input class='form-control' type='text' name='bedrijfPraktijkbegeleiderTelefoon' value='".$this->student[0]['bedrijfPraktijkBegeleiderTelefoon']."'</td></tr>
                        <tr><td>Kenniscentrum:</td><td><input class='form-control' type='text' name='bedrijfKenniscentrum' value='".$this->student[0]['bedrijfKennisCentrum']."'</td></tr>
                        <tr><td>Bedrijfscode van accreditatie:</td><td><input class='form-control' type='text' name='bedrijfBedrijfscode' value='".$this->student[0]['bedrijfCode']."'</td></tr>
                        <tr><td><b>Student gegevens:</b></tr></td>
                        <tr><td>Naam:</td><td><input class='form-control' type='text' name='studentNaam' value='".$this->student[0]['voornaam'] . " " . $this->student[0]['achternaam']."'</td></tr>
                        <tr><td>Studentnummer:</td><td><input class='form-control' type='text' name='studentNummer' value='".$this->student[0]['leerlingnummer']."'</td></tr>
                        <tr><td>Klascode:</td><td><input class='form-control' type='text' name='studentKlas' value='".$this->student[0]['klas']."'</td></tr>
                        <tr><td>Opleidingsnaam:</td><td><input class='form-control' type='text' name='studentOpleiding' value='".$this->student[0]['studentOpleiding']."'</td></tr>
                        <tr><td>Crebonummer Opleiding:</td><td><input class='form-control' type='text' name='studentCrebonummerOpleiding' value='".$this->student[0]['studentCreboNummerOpleiding']."'</td></tr>
                        <tr><td>BOL/BBL:</td><td><input class='form-control' type='text' name='studentRichting' value='".$this->student[0]['studentRichting']."'</td></tr>
                        <tr><td>Inleverdatum:</td><td><input class='form-control' type='text' name='studentInleverdatum' value='".$this->student[0]['studentInleverdatum']."'</td></tr>
			<tr><td><b>In te vullen door BPV-coördinator van team/opleiding:</b></td></tr>
                        <tr><td>Onderwijsbegeleider:</td><td><input class='form-control' type='text' name='onderwijsBegeleider'</td></tr>
                        <tr><td>Rechtsgeldig vertegenwoordiger Landstede/ teken bevoegd:</td><td><input class='form-control' type='text' name='vertegenwoordigerLandstede'</td></tr>
                        <tr><td>BPV-periode-begin (Bijv: yyyy-mm-dd):</td><td><input class='form-control' type='text' name='bpvPeriodeBegin'</td></tr>
                        <tr><td>BPV-periode-eind (Bijv: yyyy-mm-dd):</td><td><input class='form-control' type='text' name='bpvPeriodeEind'</td></tr>
                        <tr><td>Aantal sbu’s:</td><td><input class='form-control' type='text' name='bpvSbu'</td></tr>
                        <tr><td>Welke kerntaken/werkprocessen gaan in deze BPV-periode beoordeeld worden:</td><td><input class='form-control' type='text' name='werkprocessen'</td></tr>
                        <tr><td>Hoe vindt de begeleiding door de team plaats:</td><td><input class='form-control' type='text' name='begeleidingTeam'</td></tr>
                        <tr><td>Hoe vindt de begeleiding door het bedrijf plaats:</td><td><input class='form-control' type='text' name='begeleidingBedrijf'</td></tr>
                        <tr><td><input class='form-control' type='submit' value='Opslaan'></td></tr>
                    </form>
                </table>";
        }
    ?>
