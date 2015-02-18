<!--
<div id="wrap">
    <div id="pok">
			<FORM METHOD="post" ACTION="" >
<DIV>
	<h3>Beroepspraktijkvorming biedende organisatie</h3>
		<table>	
			<tr><td>Bedrijfsnaam</td><td>:</td> <td> <input name="test1." type="text" size="30"value=""></td> </tr>
			<tr> <td>Adres </td>  <td>:</td> <td> <input name="test2" type="text" size="30"value=""></td> </tr>
			<tr> <td>Postcode </td>  <td>:</td> <td> <input name="test3" type="text" size="30"value=""></td> </tr>
			<tr> <td>Telefoon</td><td>:</td> <td> <input name="test4" type="text" size="30"value=""></td> </tr>
			<tr> <td>Website </td>  <td>:</td> <td> <input name="test5" type="text" size="30"value=""></td> </tr>

			<tr> <td>Contactpersoon+voorletters</td><td>:</td> <td> <input name="test6" type="text" size="30"value=""></td> </tr>
			<tr> <td>Contactpersoon telefoon</td><td>:</td> <td> <input name="test7" type="text" size="30"value=""></td> </tr>
			<tr> <td>Contactpersoon @-mail</td><td>:</td> <td> <input name="test8" type="text" size="30"value=""></td> </tr>
			<tr> <td>Praktijkbegeleider+ voorletter(s)</td><td>:</td> <td> <input name="test9" type="text" size="30"value=""></td> </tr>
			<tr> <td>Praktijkbegeleider telefoon </td>  <td>:</td> <td> <input name="test10" type="text" size="30"value=""></td> </tr>
			<tr><td>Kenniscentrum </td><td>:</td> <td> <input name="test11" type="text" size="30"value=""></td> </tr>
			<tr><td>Bedrijfscode van accreditatie </td><td>:</td> <td> <input name="test12" type="text" size="30"value=""></td> </tr>
		</table>
		<h3>Student</h3>
	<table>
		<tr><td>Naam</td><td>:</td><td><input name="tes13" type="text" size="30" value=""></td> </tr>
		<tr><td>Studentnummer <td>:</td><td><input name="test14" type="tex" size="30" value=""></td> </tr>
		<tr><td>Klascode</td> <td>:</td> <td><input name="test15" type="text" size="30" value=""></td> </tr>
		<tr><td>Opleidingsnaam</td><td>:</td><td><input name="test16" type="text" size="30" value=""></td> </tr>
		<tr><td>Crebonummer <td>:</td><td><input name="test17" type="text" size="30" value=""></td> </tr>
		<tr><td>BOL/BBL</td> <td>:</td> <td><input name="test18" type="text" size="30" value=""></td> </tr>
		<tr><td>Inleverdatum</td>  <td>:</td> <td> <input name="test19" type="text" size="30"value=""></td> </tr>			
		<tr> <td>Bpv-coördinator</td><td>:</td> <td> <input name="test20" type="text" size="30"value=""></td> </tr>
		<tr> <td>Stagebegeleider Landstede</td><td>:</td> <td> <input name="test21" type="text" size="30"value=""></td> </tr>
		<tr> <td>BPV-periode (data)</td><td>:</td> <td> <input name="test22" type="text" size="30"value=""></td> </tr>
		<tr> <td>Aantal sbu's</td><td>:</td> <td> <input name="test23" type="text" size="30"value=""></td> </tr>
		<tr> <td>Brinnummer</td><td>:</td> <td> <input name="test24" type="text" size="30"value=""></td> </tr>
		<tr> <td>Crebonummer</td><td>:</td> <td> <input name="test25" type="text" size="30"value=""></td> </tr>
		<tr> <td>Opmerking</td><td>:</td> <td> <input name="test26" type="text" size="30"value=""></td> </tr>
		</table>

	<br><br>
<input TYPE="reset" value="Formulier wissen">
<input TYPE="submit" value="Formulier insturen">
</DIV>
</FORM>

    </div>
</div>
-->
<?php
if(!isset($_POST['number'])){
    echo
	"<div>
	    Test nummer: 9812355<br>
	    <form action=". URL ."pok/crawl method='post'>
		Ecabo nummer: <input type='text' name='number'>
	    </form>
	</div>";
}else{
    print_r($this->data);
    echo
	"<div>
	    <form action=". URL ."pok/crawl method='post'>
		<input type='text' name='number'><br>
		<input type='text' name='number'><br>
		<input type='text' name='number'><br>
		<input type='text' name='number'><br>
		<input type='text' name='number'><br>
	</div>";
}

