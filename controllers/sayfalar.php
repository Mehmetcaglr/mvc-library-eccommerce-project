<?php

class sayfalar extends Controller  {
	
	
	function __construct() {
		parent::__construct();
		
	
	
	
	}	
	
	
	function iletisim() {
	
	$this->view->goster("sayfalar/iletisim");
		
	}
	
	function sepet() {
	
	$this->view->goster("sayfalar/sepet");
		
	}
	
	
	
	
}




?>