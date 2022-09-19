<?php

class magaza extends Controller { 

function __construct() {
    parent::__construct();



    Session::init();



$this->Modelyukle('magaza');

  $this->view->goster("sayfalar/index",array(
    "data1" => $this->model->anasayfaUrunler("urunler","where durum=0 order by id decs"),
    "data2" => $this->model->anasayfaUrunler("urunler","where durum=1 order by id desc")
  ));



}


}



?>