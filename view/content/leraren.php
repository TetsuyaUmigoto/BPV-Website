<div class="map-wrap">
    <div id="map" style="width: 500px; height: 400px;">
    </div>
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
	zoom: 7,
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
<div id="klassen">
    <div id="klassen1"><h3>klassen</h3></div>
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

    <?php
    if(isset($this->leerlingen)){
	?> 

        <div id="stage1"><h3><?php echo $this->leraar[0]["leraar_voornaam"] ?> <?php echo $this->leraar[0]["leraar_achternaam"] ?><h3></div>
    		<div id="leerlingen">
    		    <table id="leerlingTable">
    			<thead>
    			<td>
    			    Naam:
    			</td>
    			<td>
    			    Stage bedrijf:
    			</td>
    			<td>
    			    Stage plaats:
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
				    $progress = ($leerling['pokStatus'] * 25) + 25;
				    echo "
                                    <tr>
                                        <td>
                                            <a href='" . URL . "leraren/showStudent/" . $leerling['leerlingnummer'] . "'>" . $leerling['achternaam'] . ", " . $leerling['voornaam'] . "</a>
                                        </td>
                                        <td>
                                            " . $leerling['bedrijfNaam'] . "
                                        </td>
                                        <td>
                                            " . $leerling['bedrijfPlaats'] . "
                                        </td>
                                        <td>
                                            " . $leerling['klas'] . "
                                        </td>
                                        <td>
                                            <div class='demo-wrapper html5-progress-bar'>
                                                <div class='progress-bar-wrapper'>
                                                    <progress id='progressbar' class='i" . $progress . "' value='" . $progress . "' max='100'></progress>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>";
				}
			    }
			    ?>
                        </tbody>
                    </table>
                </div>
