<?php

class GenelGorev_model extends Model {
	
	
	function __construct() {		
		parent:: __construct();
	}
	
	
	
	function YorumEkleme($tabloisim,$sutunadlari,$veriler) {
		
		return $this->db->Ekle($tabloisim,$sutunadlari,$veriler);
	
		
		
	}
	
		function BultenEkleme($tabloisim,$sutunadlari,$veriler) {
		
		return $this->db->Ekle($tabloisim,$sutunadlari,$veriler);
	
		
		
	}
	
			function iletisimForm($tabloisim,$sutunadlari,$veriler) {
		
		return $this->db->Ekle($tabloisim,$sutunadlari,$veriler);
	
		
		
	}
	
		

	

	
	

	

	
}




?>