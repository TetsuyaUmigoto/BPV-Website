<?php

class Controller {

    function __construct() {
        $this->view = new View();
        Session::init();
    }

    public function loadmodel($name) {
        $path = 'model/' . $name . '.model.php';
        $this->loginCheck($name);
        if (file_exists($path)) {
            require 'model/' . $name . '.model.php';
            $modelname = $name . '_model';
            $this->model = new $modelname;
        }
    }

    public function loginCheck($name) {
        if (!isset($_SESSION['user_id']) && $name !== 'voorpagina') {
            header("location: " . URL . "voorpagina");
        }
    }

}
