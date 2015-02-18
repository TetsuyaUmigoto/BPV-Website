<div class="hoi1"></div>
<div class="nee"></div>

<form action='<?php echo URL ?>leraren/caldav' method='post'>
    LeerlingNummer:<input type='text' class='form-control' name='leerlingnummer'>
    Afspraak:<input type='text' class='form-control' name='afspraak'>
    Tijd:<input type='text' class='form-control' name='tijd'>
    <input type='submit' class='btn btn-primary' value='Create!'>
</form>
<table id="table">
    <tr>
        <td>LeerlingNummer</td>
        <td>Afspraak</td>
        <td>Tijd</td>
    </tr>
    <?php
    if (isset($this->agenda)) {
        foreach ($this->agenda as $row) {
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