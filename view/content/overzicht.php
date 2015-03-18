<div class="wrap">
    <table>
        <tr>
   <td> <div id="zoek"> <p>zoekbalk</p> </div></td>
    <td><div id="bedrijf"></td>
        </tr>
        </table>
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