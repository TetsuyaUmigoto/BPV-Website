<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel='shortcut icon' href='<?php echo URL; ?>public/img/pic.ico' type='image/x-icon'>
        <link rel='stylesheet' type='text/css' href='<?php echo URL; ?>public/css/<?php if(isset($this->style)){echo $this->style;} else {echo 'style';} ?>.css'>
        <link rel='stylesheet' type='text/css' href='<?php echo URL; ?>public/css/<?php if(isset($this->altStyle)){echo $this->altStyle;} else {echo 'style';} ?>.css'>
        <script src='//code.jquery.com/jquery-1.11.0.min.js'></script>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>
            <?php echo $this->title; ?>
        </title>
    </head>
    <body>
        <div class='container'>
            <div class='nav-header'>
                <!-- knopjes -->
                <a class="head-link" href="<?php echo URL ?>voorpagina"><div class="col-md-1-link">Voorpagina</div></a>
                <a class="head-link" href="<?php echo URL ?>overzicht"><div class="col-md-1-link">Overzicht</div></a>
                <a class="head-link" href="<?php echo URL ?>studenten"><div class="col-md-1-link">Studenten</div></a>
                <a class="head-link" href="<?php echo URL ?>leraren"><div class="col-md-1-link">Leraren</div></a>
                <a class="head-link" href="<?php echo URL ?>crawler"><div class="col-md-1-link">Crawler</div></a>
                <div class="andere"><?php 
print_r($_SESSION);

if (!isset($_SESSION['user_id'])) {
    echo
    "<form id='loginForm' method='post' action='" . URL . "login/userLogin'>
                <input type='text' name='username' /> 
                <select name='type'>
                    <option value='0'>
                        Leerling
                    </option> 
                    <option value='1'>
                        Leraar
                    </option>
                    <option value='2'>
                        Bedrijf
                    </option>
                </select>
                <br>
                <input type='password' name='password'>
                
                <input type='submit' value='Login' />
            </form>";
} else {
    echo "<br /><a href='" . URL . "login/UserLogout'>Log Uit</a>";
} 
?>
</div>

                
           </div> </div><br> 
