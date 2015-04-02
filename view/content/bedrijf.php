<div id="wrap">
    <div id="info"><h3>
        <?php
        if (isset($this->info)) {
            foreach ($this->info as $info) {
                ?>
                <div class="bedrijfInfo"><p><?php echo $info['bedrijf_naam'] ?></p></div>
                <div class="bedrijfInfo"><p id="Gsterren"><?php echo $this->gemiddelde ?> Sterren</p></div>
                <div class="bedrijfInfo"></div>
       </h3> </div>
    <div id="infoWrapper">
    	
 	  		<div id="comments">
	      
                <div class="bedrijfInform"><p>Reactie's:</p></div>
            </div>    
                <?php
            }
        }
        ?>

    <div id="gebruikerComments">
        <?php
        if (isset($this->comments)) {
            foreach ($this->comments as $row) {
                echo 
                "<div class='leerlingnummer'>" . "LeerlingNr: " . $row['leerlingnummer'] . "</div>"
                . " <div class='rating'>" . "rating: " .$row['rating'] . "</div>"
                . "<div class='comment'>" . "Reactie: <br>" . $row['comment'] . "</div>". "<br>";
            }
        }
        ?>
    </div></div>
    <div class="bedrijf-comments-test">
        <form class="form2" action='<?php echo URL ?>bedrijf/postComment' method='post'>
            <input type="hidden" name="bedrijf_id" value="<?php echo $this->bedrijfId ?>" />
            <input type="hidden" name="rating" id="ratingInput" value="" />
            LeerlingNummer:<input type='text' class='form-control1' name='leerlingnummer'>
            Rating:<span class="rating">
                <input type="radio" class="rating-input"
                       id="rating-input-5" name="rating-input-1">
                <label for="rating-input-5" class="rating-star"></label>
                <input type="radio" class="rating-input"
                       id="rating-input-4" name="rating-input-1">
                <label for="rating-input-4" class="rating-star"></label>
                <input type="radio" class="rating-input"
                       id="rating-input-3" name="rating-input-1">
                <label for="rating-input-3" class="rating-star"></label>
                <input type="radio" class="rating-input"
                       id="rating-input-2" name="rating-input-1">
                <label for="rating-input-2" class="rating-star"></label>
                <input type="radio" class="rating-input"
                       id="rating-input-1" name="rating-input-1">
                <label for="rating-input-1" class="rating-star"></label>
            </span><br><br>
            Comment:<textarea type='text' rows="2" cols="75" class='form-control2' name='comment'></textarea><br>
            
            <input type='submit' class='btnComment' value='Comment!'>
        </form>
    </div>
</div>
		    <div class="map2"><div id="map"  style="width: 500px; height: 400px;">


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
		    		    </div></div>
