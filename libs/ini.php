<?php
error_reporting(E_ALL);
require 'config/constant.php';
require 'libs/router.php';
require 'libs/session.php';
require 'libs/controller.php';
require 'libs/view.php';
require 'libs/model.php';
require 'libs/database.php';
$site = new Router();
