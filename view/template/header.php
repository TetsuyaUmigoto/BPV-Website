<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel='shortcut icon' href='<?php echo URL; ?>public/img/pic.ico' type='image/x-icon'>
        <link rel='stylesheet' type='text/css' href='<?php echo URL; ?>public/css/<?php if(isset($this->style)){echo $this->style;} else {echo 'style';} ?>.css'>
        <script src='//code.jquery.com/jquery-1.11.0.min.js'></script>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>
            <?php echo $this->title; ?>
        </title>
    </head>
    <body>
        <div class='container'>
            <div id='header'>
                <a class='head-link' href="<?php echo URL ?>crawler"><div class='col-md-1-link'>Home</div></a>
            </div>