<div class="wrap">
    <div id="zoek">
	<p>
		<form method="get" action="<?php echo URL ?>overzicht">
			Naam:<input type="search" name="naam" />
			<br />
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
			<br />
			Plaats:<input type="search" name="plaats" />
			<input type="submit" value="zoeken" />
		</form>
	</p>
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
