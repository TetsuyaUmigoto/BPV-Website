<div class="wrap">
    <div id="zoek">
	<p>zoekbalk</p>
    </div>
    <div id="bedrijf">
        <table id="overzichtBedrijven">
            <thead>
	    <td>
		Ecabo/GOC nummer
	    </td>
	    <td>
		Naam
	    </td>
            </thead>
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