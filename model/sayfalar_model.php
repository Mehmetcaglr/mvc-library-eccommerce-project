<?php

class sayfalar_model extends Model {

    function __construct()
    {
      parent::__construct();
    
    }



    function iletisim(){

      $this->view->goster("sayfalar/iletisim");
    }


}

?>