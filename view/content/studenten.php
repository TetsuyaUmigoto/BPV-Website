<div id="wrap">
    <?php
        $studentInfo = $this->studentInfo[0];
    ?>
    <div id="gegevens">
        <div id="kopje"><h3>Gegevens</h3></div>
        <table class='haai'>
            <tr>
                <td>
                    Leerlingnummer
                </td>
                <td>
                    <?php
                        echo $studentInfo["leerlingnummer"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    Naam
                </td>
                <td>
                    <?php
                        echo $studentInfo["voornaam"] . " " . $studentInfo["achternaam"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td>
                    <?php
                        echo $studentInfo["email"];
                    ?>
                </td>
            </tr>
	    <tr>
                <td>
                    Website
                </td>
                <td>
                    <a href='http://<?php echo $studentInfo["voornaam"][0].$studentInfo["achternaam"];?>.newdeveloper.nl' target='_blank'><?php echo $studentInfo["voornaam"][0].$studentInfo["achternaam"];?>.newdeveloper.nl</a><br>
                </td>
            </tr>
            <tr>
                <td>
                    Tel. Nummer
                </td>
                <td>
                    <?php
                        echo $studentInfo["telefoonnummer"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    Klas
                </td>
                <td>
                    <?php
                        echo $studentInfo["klas"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    Leraar
                </td>
                <td>
                    <?php
                        echo $studentInfo["leraar_id"];
                    ?>
                </td>
            </tr>
        </table>
    </div>
    <div id="pokAanvragen">
        <div id="pok1">
        <h3>POK-aanvragen:</h3><br /></div>
        <span>POK status:</span><br>
            <div class="demo-wrapper html5-progress-bar">
                    <div class="progress-bar-wrapper">
			<progress id="progressbar" value="0" max="100"></progress>
			
                    </div>
                </div>
        <?php
	    if(isset($this->pokInfo[0])){
		foreach($this->pokInfo as $pokInfo){
                $pokInfo = $this->pokInfo[0];
                echo 
		    "Bedrijf: " . $pokInfo["bedrijfNaam"] . "<br />Status: " . $pokInfo["pokStatus"]."<br>".
		    "<a href='".URL."studenten/pokAnnuleren'>Pok Aanvraag Annuleren</a>";
		}
	    }else{
		echo"
		    <a href='".URL."pok'>Pok Aanvragen</a>";
	    }
	?>
    </div>
</div>