<?php

class Pok extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->title = 'POK';
        $this->view->style = 'bootstrap';
        $this->view->altStyle = 'style1';
    }

    function index() {
        $this->view->render('pok');
    }
    
    function crawl() {
        if(isset($_POST['ecabo'])){
	    $ecabo = $_POST['ecabo'];
	    $this->view->ecabo = $ecabo;
	    $this->view->render('pok');
	}else if(isset($_POST['number'])){
	    if ($_POST['number'] == "") {
                header("location: " . URL . "pok");
	    }else{
		include 'external/simple_html_dom.php';
		$html = new simple_html_dom();
		$html = file_get_html('http://mijn.ecabo.nl/zoeken/Leerbedrijf/Index/' . $_POST['number']);
		// Find all links
		//$returnval = "";
		foreach ($html->find('.content-holder') as $element) {
		    $returnval = $element;
		}
		if (isset($returnval->children) == null) {
		    header("location: " . URL . "pok");
		}
		$bedrijfNaam = $returnval->children(2)->children(1);
		$bedrijfNaam = preg_replace('/\s+/', ' ',$bedrijfNaam);
		$bedrijfAdres = $returnval->children(2)->children(3);
		$bedrijfAdres = preg_replace('/\s+/', ' ',$bedrijfAdres);
		$bedrijfPostcode = $returnval->children(2)->children(5);
		$bedrijfPostcode = preg_replace('/\s+/', ' ',$bedrijfPostcode);
		$bedrijfPlaats = $returnval->children(2)->children(7);
		$bedrijfPlaats = preg_replace('/\s+/', ' ',$bedrijfPlaats);
		$bedrijfTelefoon = $returnval->children(2)->children(11);
		$bedrijfTelefoon = preg_replace('/\s+/', ' ',$bedrijfTelefoon);
		$bedrijfWebsite = $returnval->children(6)->children(3)->children(1);
		$bedrijfWebsite = preg_replace('/\s+/', ' ',$bedrijfWebsite);
		$bedrijfContactPersoon = $returnval->children(8)->children(1);
		$bedrijfContactPersoon = preg_replace('/\s+/', ' ',$bedrijfContactPersoon);
		$bedrijfContactPersoonTelefoon = $returnval->children(8)->children(5);
		$bedrijfContactPersoonTelefoon = preg_replace('/\s+/', ' ',$bedrijfContactPersoonTelefoon);
		$bedrijfContactPersoonEmail = $returnval->children(8)->children(3);
		$bedrijfContactPersoonEmail = preg_replace('/\s+/', ' ',$bedrijfContactPersoonEmail);
		$bedrijfPraktijkBegeleider = $returnval->children(10)->children(1);
		$bedrijfPraktijkBegeleider = preg_replace('/\s+/', ' ',$bedrijfPraktijkBegeleider);
		$bedrijfPraktijkBegeleiderTelefoon = $returnval->children(10)->children(5);
		$bedrijfPraktijkBegeleiderTelefoon = preg_replace('/\s+/', ' ',$bedrijfPraktijkBegeleiderTelefoon);
		// Needs to be fixxed
		$bedrijfKennisCentrum = $returnval->children(1)->children(0);
		$bedrijfKennisCentrum = preg_replace('/\s+/', ' ',$bedrijfKennisCentrum);
		$bedrijfCode = $returnval->children(1)->children(0);
		$bedrijfCode = preg_replace('/\s+/', ' ',$bedrijfCode);

		$this->view->bedrijfNaam = strip_tags($bedrijfNaam);
		$this->view->bedrijfAdres = strip_tags($bedrijfAdres);
		$this->view->bedrijfPostcode = strip_tags($bedrijfPostcode);
		$this->view->bedrijfPlaats = strip_tags($bedrijfPlaats);
		$this->view->bedrijfTelefoon = strip_tags($bedrijfTelefoon);
		$this->view->bedrijfWebsite = strip_tags($bedrijfWebsite);
		$this->view->bedrijfContactPersoon = strip_tags($bedrijfContactPersoon);
		$this->view->bedrijfContactPersoonTelefoon = strip_tags($bedrijfContactPersoonTelefoon);
		$this->view->bedrijfContactPersoonEmail = strip_tags($bedrijfContactPersoonEmail);
		$this->view->bedrijfPraktijkBegeleider = strip_tags($bedrijfPraktijkBegeleider);
		$this->view->bedrijfPraktijkBegeleiderTelefoon = strip_tags($bedrijfPraktijkBegeleiderTelefoon);
		$this->view->bedrijfKennisCentrum = strip_tags($bedrijfKennisCentrum);
		$this->view->bedrijfCode = strip_tags($bedrijfCode);
                $this->view->studentData = $this->model->studentGegevens();
		$this->view->render('pok');
	    }
	}else if($_POST['goc']){
	    $goc = $_POST['goc'];
	    $this->view->goc = $goc;
	    $this->view->render('pok');
	}
    }
    
    function pokAanvraag(){
	   $this->model->pokAanvraag(); 
    }

}