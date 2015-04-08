<!--
<div id="map" style="width: 500px; height: 400px;">

</div>
-->
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
    <p class="formulier">LeerlingNummer:</p><input type='text' class='form-control' name='leerlingnummer' value='<?php echo $this->student[0]['leerlingnummer'] ?>'>
    <p class="formulier">Afspraak:</p><input type='text' class='form-control' name='afspraak'>
    <p class="formulier">Tijd:</p><input type='text' class='form-control' name='tijd'>
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
</div>

<div id="stage">
    <div id="stage1">
	<h3>
	    POK Gegevens
	</h3>
    </div>
    <table class='table'>
		<tr><td><b>Bedrijfsgegevens:</b></tr></td>
		    <tr><td>Bedrijfsnaam:</td><td><?php echo $this->student[0]["bedrijfNaam"] ?></td></tr>
		    <tr><td>Adres:</td><td><?php echo $this->student[0]['bedrijfAdres'] ?></td></tr>
		    <tr><td>Postcode:</td><td><?php echo $this->student[0]['bedrijfPostcode'] ?></td></tr>
		    <tr><td>Plaats:</td><td><?php echo $this->student[0]['bedrijfPlaats'] ?></td></tr>
		    <tr><td>Telefoonnummer:</td><td><?php echo $this->student[0]['bedrijfTelefoon'] ?></td></tr>
		    <tr><td>Website:</td><td><?php echo $this->student[0]['bedrijfWebsite'] ?></td></tr>
		    <tr><td>Contactpersoon + voorletter(s)(bekend bij kenniscentrum/ teken bevoegd:</td><td><?php echo $this->student[0]['bedrijfContactPersoon'] ?></td></tr>
		    <tr><td>Contactpersoon telefoon:</td><td><?php echo $this->student[0]['bedrijfContactPersoonTelefoon'] ?></td></tr>
		    <tr><td>Contactpersoon @-mail:</td><td><?php echo $this->student[0]['bedrijfContactPersoonEmail'] ?></td></tr>
		    <tr><td>Praktijkbegeleider + voorletter(s):</td><td><?php echo $this->student[0]['bedrijfPraktijkBegeleider'] ?></td></tr>
		    <tr><td>Praktijkbegeleider telefoon:</td><td><?php echo $this->student[0]['bedrijfPraktijkBegeleiderTelefoon'] ?></td></tr>
		    <tr><td>Kenniscentrum:</td><td><?php echo $this->student[0]['bedrijfKennisCentrum'] ?></td></tr>
		    <tr><td>Bedrijfscode van accreditatie:</td><td><?php echo $this->student[0]['bedrijfCode'] ?></td></tr>
		<tr><td><b>Student gegevens:</b></tr></td>
		    <tr><td>Naam:</td><td><?php echo $this->student[0]['voornaam'] . " " . $this->student[0]['achternaam']  ?></td></tr>
		    <tr><td>Studentnummer:</td><td><?php echo $this->student[0]['leerlingnummer']  ?></td></tr>
		    <tr><td>Klascode:</td><td><?php echo $this->student[0]['klas']  ?></td></tr>
		    <tr><td>Opleidingsnaam:</td><td><?php echo $this->student[0]['studentOpleiding'] ?></td></tr>
		    <tr><td>Crebonummer Opleiding:</td><td><?php echo $this->student[0]['studentCreboNummerOpleiding'] ?></td></tr>
		    <tr><td>BOL/BBL:</td><td><?php echo $this->student[0]['studentRichting'] ?></td></tr>
		    <tr><td>Inleverdatum:</td><td><?php echo $this->student[0]['studentInleverdatum'] ?></td></tr>

		    <tr><td>BPV-Coördinator:</td><td><?php echo $this->student[0]['bpvCoordinator'] ?></td></tr>
		    <tr><td>Stagebegeleider Landstede:</td><td><?php echo $this->student[0]['bpvBegeleider'] ?></td></tr>
		    <tr><td>BPV-periode-begin (Bijv: yyyy-mm-dd):</td><td><?php echo date("Y-m-d", $this->student[0]['bpvPeriodeBegin']) ?></td></tr>
		    <tr><td>BPV-periode-eind (Bijv: yyyy-mm-dd):</td><td><?php echo date("Y-m-d", $this->student[0]['bpvPeriodeEind']) ?></td></tr>
		    <tr><td>Aantal sbu’s:</td><td><?php echo $this->student[0]['bpvSbu'] ?></td></tr>
		    <tr><td>Brinnummer:</td><td><?php echo $this->student[0]['bpvBrin'] ?></td></tr>
		    <tr><td>Crebonummer:</td><td><?php echo $this->student[0]['bpvCrebo'] ?></td></tr>
		    <tr><td>Opmerkingen:</td><td><?php echo $this->student[0]['bpvOpmerking'] ?></td></tr>
	    </table>
</div>