<div id="wrap">
    <?php 
        $studentInfo = $this->studentInfo[0];
    ?>
    <div id="gegevens">
        <table>
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
        POK-aanvragen:<br />
        <?php
            foreach($this->pokInfo as $pokInfo){
                $pokInfo = $this->pokInfo[0];
                
                echo "Bedrijf: " . $pokInfo["bedrijfNaam"] . "<br />Status: " . $pokInfo["pokStatus"];
            }
        ?>
    </div>
    <div id="bedrijf">bedrijf</div>
    <div id="link">www.newdeveloper.nl</div>
    <div id="uitloggen">uitloggen</div>
</div>