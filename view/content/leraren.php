<div id="map" style="width: 500px; height: 400px;">

</div>
<script type="text/javascript"
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGBByvGgOTRGqO-ZB1hVoAeVZGjm6UoTM">
</script>
    <?php
	$locations = "[";
	foreach($this->leerlingen as $leerling){
	    $locations .= "'" . $leerling['bedrijfPostcode'] . "'" . ", ";
	}
	$locations = substr($locations, 0, strlen($locations) - 2) . "]";
    ?>
<script type="text/javascript">
    var delay = 100;
    var infowindow = new google.maps.InfoWindow();
    var latlng = new google.maps.LatLng(52.527978100000000000, 5.995350800000006000);
    var locations = <?php echo $locations ?>;
    var nextAddress = 0;
    var mapOptions = {
	zoom: 6,
	center: latlng,
	mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var geocoder = new google.maps.Geocoder();
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    var bounds = new google.maps.LatLngBounds();

    function geocodeAddress(address, next) {
	geocoder.geocode({address: address}, function (results, status){
	    if (status == google.maps.GeocoderStatus.OK) {
		var p = results[0].geometry.location;
		var lat = p.lat();
		var lng = p.lng();
		createMarker(address, lat, lng);
	    }else{
		if(status == google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
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
	    map: map,
	});
	google.maps.event.addListener(marker, 'click', function () {
	    infowindow.setContent(contentString);
	    infowindow.open(map, marker);
	});
	bounds.extend(marker.position);
    }
    
    function theNext() {
	if (nextAddress < locations.length) {
	    setTimeout('geocodeAddress("' + locations[nextAddress] + '",theNext)', delay);
	    nextAddress++;
	}
    }
    theNext();
</script>
<div class="hoi1"></div>
<div class="nee"></div>
<div id="knopklas">
	Klas</div>
<div id="knoppok">Pok</div>
<div id="klassen">
    <div id="klassen1"><h3>klas</h3></div>
    <table>

		<?php
			foreach($this->klassen as $klas){
				echo "<tr>
					<td>
						<a href='" . URL . "leraren/showKlas/" . $klas["klas"] . "'>
							" . $klas["klas"] . "
						</a>
					</td>
				</tr>";
			}
		?>
    </table>
</div>

<div id="stage">
    <div id="stage1"><h3><?php echo $this->leraar[0]["voornaam"]?> <?php echo $this->leraar[0]["achternaam"]?><h3></div>
<form action='<?php echo URL ?>leraren/caldav' method='post'>
    <p class="formulier">LeerlingNummer:</p><input type='text' class='form-control' name='leerlingnummer'>
    <p class="formulier">Afspraak:</p><input type='text' class='form-control' name='afspraak'>
    <p class="formulier">Tijd:</p><input type='text' class='form-control' name='tijd'>
    <input type='submit' class='btn btn-primary' value='Create!'>
</form>
<div id="leerlingen">
    <table id="leerlingTable">
        <thead>
        <td>
            Leerlingnummer:
        </td>
        <td>
            Naam:
        </td>
        <td>
            Klas:
        </td>
        <td>
            Pokstatus:
        </td>
        </thead>
        <tbody>
	    <?php
	    foreach($this->leerlingen as $leerling){
		echo "
                        <tr>
                            <td>
                                " . $leerling['leerlingnummer'] . "
                            </td>
                            <td>
                                " . $leerling['voornaam'] . " " . $leerling['achternaam'] . "
                            </td>
                            <td>
                                " . $leerling['klas'] . "
                            </td>
                            <td>
								<div class='demo-wrapper html5-progress-bar'>
									<div class='progress-bar-wrapper'>
										<progress id='progressbar' value='" . ($leerling['pokStatus'] * 4) . + 25 . "' max='100'></progress>
									</div>
								</div>
                            </td>
                        </tr>";
		}
		?>
	    </tbody>
	</table>
</div>