<?php

class View {


   //BURASI KULLANMICAM AŞAĞIDA DÖNGÜ VAR DAHA İŞLEVSEL [$header=null,$data1=null,$data2=null,$data3=null]
public function goster ($dosyaad,array $veri=null) {
    
    require 'views/'.$dosyaad.'.php';
}



}






?>