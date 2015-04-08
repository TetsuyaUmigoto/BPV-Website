<div id="map" style="width: 500px; height: 400px;">

</div>
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGBByvGgOTRGqO-ZB1hVoAeVZGjm6UoTM">
</script>
<script type="text/javascript">
    var delay = 100;
    var infowindow = new google.maps.InfoWindow();
    var latlng = new google.maps.LatLng(52.527978100000000000, 5.995350800000006000);
    var names =<?php //echo $this->names ?>;
    var locations = <?php //echo $this->locations ?>;
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
<div id="klassen">
    <div id="klassen1">
	<h3>
	    Student
	</h3>
    </div>
</div>

<div id="stage">
    <div id="stage1">
	<h3>
	    POK Gegevens
	<h3>
    </div>	
</div>