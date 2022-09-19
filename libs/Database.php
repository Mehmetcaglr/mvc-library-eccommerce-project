<?php 

class Database extends PDO {
    
   protected $dizi=array();
   protected $dizi2=array();

function __construct()
{
    parent:: __construct('mysql:host=localhost3307;dbname=mvcproje','root','');



    
     $this->bilgi= new Bilgi();
   }
 
   function Ekle($tabloisim,$sutunadlari,$veriler) {

      

      $sutunsayi=count($sutunadlari);
      
      for ($i=0; $i<$sutunsayi; $i++ ):

     
       $this->dizi[]='?';
      endfor;
      $sonVal=join (",",$this->dizi);

      $sonhal=join (",",$sutunadlari);

      // bu işlemlerden sonra buranın çıktısı ?,?,? böyle olacak.

    
    



    $sorgu=$this->prepare('INSERT into '.$tabloisim.' ('.$sonhal.') VALUES('.$sonVal.')');

  

    if ( $sorgu->execute(($veriler))) :
       return 1;
       //return $this->bilgi->basarili("EKLEME BAŞARILI","/kayit/kayitekle");

    else:
       return 0;
       //return $this->bilgi->hata("VERİ TABANI HATASI","/kayit/kayitekle");
    endif;

   }// ekleme
   function listele($tabloisim,$kosul=false) {
      if ($kosul==false) :

         $sorgum="SELECT * from ".$tabloisim;

      else:

         $sorgum="SELECT * from ".$tabloisim." ".$kosul;

      endif;

      $son=$this->prepare($sorgum);
      $son->execute();

      return $son->fetchAll();
   }



      function sil($tabloisim,$kosul) {
		
         $sorgum=$this->prepare("DELETE from ".$tabloisim. ' where '.$kosul);
         
         if ($sorgum->execute()) :
         
         return $this->bilgi->basarili("SİLME BAŞARILI","/kayit/listele");	
         else:		
         return $this->bilgi->hata("VERİ TABANI HATASI","/kayit/listele");		
         
         endif;
         
      }
      


      function guncelle($tabloisim,$sutunlar,$veriler,$kosul) {

         foreach ($sutunlar as $deger):
            $this->dizi2[]=$deger."=?";

         endforeach;

         $sonSutunlar=join (",",$this->dizi2);

        $sorgum= $this->prepare("UPDATE" .$tabloisim." set  ".$sonSutunlar." where" .$kosul);
       
         if ($sorgum->execute($veriler)):

            return $this->bilgi->basarili("GÜNCELLEME İŞLEMİ BAŞARILI","/kayit/listele");
         else:
            return $this->bilgi->hata("VERİ TABANI HATASI","/kayit/listeleme");
   
         endif;

    }

   


   function arama($tabloisim,$kosul){

      $sorgum="SELECT * from ".$tabloisim." where ".$kosul;

      $son=$this->prepare($sorgum);
      $son->execute();

      return $son->fetchAll();

   }

   function giriskontrol($tabloisim,$kosul){
      // burda önemli bir özellik kullanılacak.

      $sorgum="SELECT * from ".$tabloisim." where ".$kosul;
      $son=$this->prepare($sorgum);
      $son->execute();

      if($son->rowCount()>0):
   
      Session::init();
      Session::set("kulad",true);



      endif;

      return $son->rowCount();


   }

   }
   



?>