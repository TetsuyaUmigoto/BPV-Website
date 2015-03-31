<div class="hoi1"></div>
<div class="nee"></div>
<div id="knopklas">Klas</div>
<div id="knoppok">Pok</div>
<div id="klassen">
    <div id="klassen1"><h3>klas</h3></div>
    <table>
        <tr> <td>it14a1</td> </tr>
          <tr><td>it14a2</td></tr>
            <tr><td>it13a1</td></tr>
            <tr><td>it13a2</td></tr>
        
    </table>
</div>

<div id="stage">
    <div id="stage1"><h3>Naam docent.</h3></div>
<form action='<?php echo URL ?>leraren/caldav' method='post'>
    LeerlingNummer:<input type='text' class='form-control' name='leerlingnummer'>
    Afspraak:<input type='text' class='form-control' name='afspraak'>
    Tijd:<input type='text' class='form-control' name='tijd'>
    <input type='submit' class='btn btn-primary' value='Create!'>
</form>
<div id="leerlingen">
    <table id="leerlingTable">
        <thead>
        <td class="TD">
            Leerlingnummer:
        </td>
        <td class="TD">
            Naam:
        </td>
        <td class="TD">
            Klas:
        </td>
        <td class="TD">
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
                                " . $leerling['pokStatus'] . "
                            </td>
                        </tr>";
                }
            ?>
            </tbody>
            </table>
            </div>
            </div>
            <table id="table">
            <tr>
            <td>Naam</td>
            <td>Afspraak</td>
            <td>Tijd</td>
            </tr>
            <?php
            if (isset($this->agenda)) {
            foreach ($this->agenda as $row) {
            echo
            "<tr>
                    <td>
                        " . $row['voornaam'] . " " . $row['achternaam'] . "
                    </td>
                    <td>" . $row['afspraak'] . "</td>
                    <td>" . $row['timestamp'] . "</td>
                </tr>";
            }
            }
            ?>
    </table>
