<?php

class Crawler extends Controller {

    public function __construct() {
        parent::__construct();
        //$this->view->script = "crawler";
        $this->view->title = 'crawler';
        $this->view->style = 'bootstrap';
    }

    function index() {
        $this->view->render('crawler');
    }

    function curl() {
        if (isset($_POST['number']) && $_POST['richting'] == "ecabo") {
            if ($_POST['number'] == "") {
                header("location: " . URL . "crawler");
            }
            include 'external/simple_html_dom.php';
            $html = new simple_html_dom();
            $html = file_get_html('http://mijn.ecabo.nl/zoeken/Leerbedrijf/Index/' . $_POST['number']);
            // Find all links
            //$returnval = "";
            foreach ($html->find('.content-holder') as $element) {
                $returnval = $element;
            }
            if (isset($returnval->children) == null) {
                header("location: " . URL . "crawler");
            }
            $test = $returnval->children(0);
            $test .= $returnval->children(2);
            $test .= $returnval->children(4);
            $test .= $returnval->children(8);
            $this->view->data = $test;
            $this->view->render('crawler');
        } else if (isset($_POST['number']) && $_POST['richting'] == "goc") {
            $this->view->render('crawler');
            echo "goc!";
        }
    }

}
