<?php

class boots {
 
   function __construct() {

    $url=isset($_GET["url"]) ? $_GET["url"]: null;
    $url=rtrim("url",'/');
    $url=explode('/',$url);
    
    
    
    //print_r($url);
    // eğer kontrolcü yazılmaz ise varsayılan olarak ana kontrolcüyü çalıştırıyorum.
    if (empty($url[0])):
        require  'controllers/magaza.php';
        $controller= new magaza();
        

    else:
    
    $file='controllers/'.$url[0]. '.php';
    if (file_exists($file)):
    
  
    
    else:
       

   //require 'controllers/error.php';

   // $hata=new hata();
    
       
    
    endif;

endif;  

   if (isset($url[3])) :
   $controller->{$url[1]} ($url[2],($url[3])) ;
    
    else:
    
    
    
    if (isset($url[2])) :
    $controller->{$url[1]} ($url[2]) ;
    
    else:
        if (isset($url[1])) :
        $controller->{$url[1] } () ;
    
    endif;
    
    
        
    endif;

    endif;
   }

}







?>