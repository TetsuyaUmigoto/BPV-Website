<?php

class Crawler extends Controller {

    public function __construct() {
        parent::__construct();
        $title = 'crawler';
        $style = 'bootstrap';
        $this->view->title = $title;
        $this->view->style = $style;
    }

    function index() {
        $this->view->render('crawler');
    }

    function curl() {
        if(isset($_POST['number'])) {
            include 'external/simple_html_dom.php';
            $html = new simple_html_dom();

            $html = file_get_html('http://mijn.ecabo.nl/zoeken/Leerbedrijf/Index/'.$_POST['number']);
            // Find all links
            foreach ($html->find('.content-holder') as $element) {
                $returnval = $element . '<br>';
            }
            $this->view->data = $returnval;
            $this->view->render('crawler');
        }else {
            return;
        }
    }
}
