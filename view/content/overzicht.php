<div class="wrap">

    <div id="zoek">
    	<div id="zoek2"><h3>zoekfunctie</h3></div>
	<p>
		<form method="get" action="<?php echo URL ?>overzicht">
			Naam:<input type="search" name="naam" />
                        <br /><br>
			Soort: 
			<select type="search" name="soort">
				<option value="">
				</option>
				<option value="0">
					Applicatieontwikkelaar
				</option>
				<option value="1">
					Mediavormgever
				</option>
			</select>
			<br/><br>
			Plaats:<input type="search" name="plaats" />
			<input type="submit" value="zoeken" />
		</form>
	</p>
    </div>
    <div id="bedrijf">
    <div id="bedrijven"><h3>bedrijven</h3></div>
        <table id="overzichtBedrijven">
            <thead>
	    <td>
		Ecabo/GOC nummer
	    </td>
	    <td>
		Naam
	    </td>
            </thead>
	    <div id="map" style="width: 500px; height: 400px;">

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
	    <?php
	    foreach($this->bedrijfList as $bedrijf){
		echo "<tr>"
		. "<td>"
		. $bedrijf['bedrijf_id'] .
		"</td>"
		. "<td>"
		. "<a href='" . URL . "bedrijf/showBedrijf/" . $bedrijf["bedrijf_id"] . "'>" . $bedrijf["bedrijf_naam"] . "</a>" .
		"</td>" .
		"</tr>";
	    }
	    ?>
        </table>
    </div>
</div>
