<?php

class Crawler extends Controller {

    public function __construct() {
        parent::__construct();
        //include_once(URL . "external/simple_html_dom.php");
    }

    function index() {

        $title = 'crawler';
        $this->view->title = $title;

        $data = $this->curl();
        
        $this->view->data = $data;
        $this->view->render('crawler');
    }

    function curl() {
        include 'external/simple_html_dom.php';
        $html = new simple_html_dom();
        
        $html = file_get_html('http://mijn.ecabo.nl/zoeken/Leerbedrijf/Index/9756939');
        // Find all links
        foreach ($html->find('.content-holder') as $element){
            $returnval = $element->plaintext . '<br>';
        }
        return $returnval;
    }

}
