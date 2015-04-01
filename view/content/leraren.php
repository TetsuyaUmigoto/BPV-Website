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
						" . $klas["klas"] . "
					</td>
				</tr>";
			}
		?>
    </table>
</div>

<div id="stage">
    <div id="stage1"><h3><?php echo $this->leraar[0]["voornaam"]?> <?php echo $this->leraar[0]["achternaam"]?><h3></div>
<form action='<?php echo URL ?>leraren/caldav' method='post'>
    LeerlingNummer:<input type='text' class='form-control' name='leerlingnummer'>
    Afspraak:<input type='text' class='form-control' name='afspraak'>
    Tijd:<input type='text' class='form-control' name='tijd'>
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
										<progress id='progressbar' value='" .  ($leerling['pokStatus'] * 4). + 25 . "' max='100'></progress>
									</div>
								</div>
                            </td>
                        </tr>";
	    }
	    ?>
	</tbody>
    </table>
</div>

<table id="table">
    <tr>
	<td>LeerlingNummer</td>
	<td>Afspraak</td>
	<td>Tijd</td>
    </tr>
    <?php
    if(isset($this->agenda)){
	foreach($this->agenda as $row){
	    echo
	    "<tr>
                    <td>" . $row['leerlingnummer'] . "</td>
                    <td>" . $row['afspraak'] . "</td>
                    <td>" . $row['timestamp'] . "</td>
                </tr>";
	}
    }
    ?>
</table>
                
            
            </tbody>
            </table>
            </div>
            </div>


    </table>
    <div id="maps1"><div id="map" style="width: 500px; height: 400px;">

</div>
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGBByvGgOTRGqO-ZB1hVoAeVZGjm6UoTM">
</script>
<script type="text/javascript">
    var delay = 100;
    var infowindow = new google.maps.InfoWindow();
    var latlng = new google.maps.LatLng(52.527978100000000000, 5.995350800000006000);
    var mapOptions = {
    zoom: 9,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var geocoder = new google.maps.Geocoder();
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    var bounds = new google.maps.LatLngBounds();

    function geocodeAddress(address, next) {
    geocoder.geocode({address: address}, function (results, status)
    {
        if (status == google.maps.GeocoderStatus.OK) {
        var p = results[0].geometry.location;
        var lat = p.lat();
        var lng = p.lng();
        createMarker(address, lat, lng);
        }
        else {
        if (status == google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
            nextAddress--;
            delay++;
        } else {
        }
        }
        next();
    }
    );
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
    var locations = ['8321HN', '8303ZN', '8317PZ', '3526KV', '8081BD', '2012ES', '1069JT', '3245VN', '3295KK', '6446XM', '6522LC', '9746CW', '1314ND', '7328DH', '2014RJ', '9451GC', '2545BH'];
    var nextAddress = 0;
    function theNext() {
    if (nextAddress < locations.length) {
        setTimeout('geocodeAddress("' + locations[nextAddress] + '",theNext)', delay);
        nextAddress++;
    } else {
        map.fitBounds(bounds);
    }
    }
    theNext();
</script>
</div>
