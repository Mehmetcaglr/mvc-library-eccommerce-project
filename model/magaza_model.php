<?php

class magaza_model extends Model {

    function __construct()
    {
      parent::__construct();
    
    }

    function ayarlar($tabload,) {
      return $this->db->listeleme($tabload);
    }

   function anasayfaUrun($tabload,$kosul) {
    return $this->db->listele($tabload);
   }
    




}


?>