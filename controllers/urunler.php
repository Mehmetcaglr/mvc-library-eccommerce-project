<?php

class urunler extends Controller { 

function __construct() {
    parent::__construct();



    Session::init();



$this->Modelyukle('magaza');

 /*$this->view->goster("sayfalar/index",array(
    "data1" => $this->model->anasayfaUrunler("urunler","where durum=0 order by id decs"),
    "data2" => $this->model->anasayfaUrunler("urunler","where durum=1 order by id desc")
  ));*/



}


  function detay($id,$ad){
    //**gelen id ye göre ürünlere bağlanarak ilgili ürünün tüm verilerini çekecez ve sayfaya göndereceğiz.*/
  
  $sonuc=$this->model->uruncek("urunler","where id=".$id);
  
  
  
    $this->view->goster("sayfalar/urundetay",
array(
  "data1" => $sonuc,
  "data2" => $this->model->modelcek("urunler","where katid=".$sonuc[0]["katid"]." and id<>" .$id."and stok <200 "),
  "data3" => $this->model->uruncek("urunler", "where katid=".$sonuc[0]["katid"]." and id<>$id LIMIT 3" ),
  "data4" => $this->model->uruncek("yorumlar", "where urunid=$id" ),

));
  // echo $id."=". $ad;
  }

function kategori(){
  
}




}



?>