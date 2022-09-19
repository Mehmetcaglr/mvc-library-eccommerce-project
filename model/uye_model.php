<?php

class uye_model extends Model {
	
	
	function __construct() {		
		parent:: __construct();
	}
	
	
	
	function GirisKontrol($tabloisim,$kosul) {
		
		return $this->db->giriskontrol($tabloisim,$kosul);
	
		
		
	}
	
		
	function UyeKayit($tabloisim,$sutunadlari,$veriler) {
		
		return $this->db->Ekle($tabloisim,$sutunadlari,$veriler);
	
		
		
	}
	

	
	

	

	
}




?>