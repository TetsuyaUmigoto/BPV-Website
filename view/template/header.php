<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel='shortcut icon' href='<?php echo URL; ?>public/img/pic.ico' type='image/x-icon'>
        <link rel='stylesheet' type='text/css' href='<?php echo URL; ?>public/css/<?php if(isset($this->style)){echo $this->style;}else{echo 'style';} ?>.css'>
        <link rel='stylesheet' type='text/css' href='<?php echo URL; ?>public/css/<?php if(isset($this->altStyle)){echo $this->altStyle;}else{echo 'style';} ?>.css'>
        <script src='//code.jquery.com/jquery-1.11.0.min.js'></script>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>
	    <?php echo $this->title; ?>
        </title>
    </head>
    <body
        <div class='container'>
            <div class='nav-header'>
                <!-- knopjes -->
                <div class="head-link">
		    <img src="<?php echo URL ?>public/img/logo2.png" alt="">
		</div>
		<?php
		if(isset($_SESSION['user_id']) && $_SESSION['role'] == 0){
		    echo "<a class='head-link' href='" . URL . "voorpagina'><div class='col-md-1-link'>Voorpagina</div></a>
		    <a class='head-link' href='" . URL . "overzicht'><div class='col-md-1-link'>Overzicht</div></a>
		    <a class='head-link' href='" . URL . "studenten'><div class='col-md-1-link'>Studenten</div></a>
		    <div class='andere'>";
		}else if(isset($_SESSION['user_id']) && $_SESSION['role'] == 1){
		    echo "<a class='head-link' href='" . URL . "voorpagina'><div class='col-md-1-link'>Voorpagina</div></a>
		    <a class='head-link' href='" . URL . "overzicht'><div class='col-md-1-link'>Overzicht</div></a>
		    <a class='head-link' href='" . URL . "leraren'><div class='col-md-1-link'>Leraren</div></a>
		    <div class='andere'>";
		}else{
		    echo "<div class='andere'>";
		}
		if(!isset($_SESSION['user_id'])){
		    echo"<form id='loginForm' method='post' action='" . URL . "login/userLogin'>
		    <input type='text' name='username' />
		    <select id='keuze' name='type'>
			<option value='0'>
			    Leerling
			</option>
			<option value='1'>
			    Leraar
			</option>
			<option value='2'>
			    Bedrijf
			</option>
		    </select><br>
		    <input type='password' name='password'>
		    <input id='login' type='submit' value='Login' />
		    </form>";
		}else{
		    echo "<br /><a id='loguit' href='" . URL . "login/UserLogout'>Log Uit</a>";
		}
		?>
	    </div>
	</div>