<?php

class uye extends Controller { 

function __construct() {
    parent::__construct();

$this->Modelyukle('uye');

}

function giris() {

  $this->view->goster("safalar/giris",array(
    "header"=> $this->model->ayar()));
}
function heaspOlustur() {

  $this->view->goster("sayfalar/uyeol");

}

function cikis() {
  Session::init();
  Session::destroy();
  $this->bilgi->direktYonlen("/magaza");
}

function kayitkontrol() {

  $ad=$this->form->get("ad")->bosmu();
  $soyad=$this->form->get("soyad")->bosmu();
  $mail=$this->form->get("mail")->bosmu();
  $sifre=$this->form->get("sifre")->bosmu();
  $sifretekrar=$this->form->get("sifretekrar")->bosmu();
  $telefon=$this->form->get("telefon")->bosmu();

   $this->form->GercektenMailmi($mail);
   $this->form->SifreTekrar($sifre,$sifretekrar);
   



 if (!empty($this->form->error)):

  $this->view->goster("uye/hesapOlustur",
  array(
  "bilgi" => $this->form->error));

 else:

  //** burda gelen verileri db ye sorucaz. */

  $sonuc=$this->model->UyeKayit("uye_panle",array("ad","soyad","mail","sifre","telefon"),
array($ad,$soyad,$mail,$sifre,$telefon));

  if ($sonuc==1):

    $this->bilgi->goster("sayfalar/uyeol",
    array("bilgi" =>$this->bilgi->uyari("succes","KAYIT BAŞARILI")));
 



    //** kullanıcı paneline girecek yükleme */

   //**Normalde olacak olan bu */ $this->bilgi->basarili("Giriş Başarılı","/uye/Form");

 


 else:

  $this->view->goster("sayfalar/uyeol",
  array("bilgi" =>$this->bilgi->uyari("danger","Kayıt esnasında hata oluştu")));

 


  endif;

 endif;



  $this->view->goster("sayfalar/uyeol");
}











function giriskontrol() {

  $ad=$this->form->get("ad")->bosmu();
  $sifre=$this->form->get("sifre")->bosmu();

 if (!empty($this->form->error)):

  $this->view->goster("sayfalar/giris",
  array(
  "header" =>  $sonuc=$this->model->ayar("ayar"),
  "bilgi" => $this->bilgi->uyari("info","Ad ve şifre boş olamaz") ));

 else:

  //** burda gelen verileri db ye sorucaz. */

  $sonuc=$this->model->girisKontrol("uye_panel","ad='$ad' and sifre='$sifre'");

  if ($sonuc==1):
    //** kullanıcı paneline girecek yükleme */

   //**Normalde olacak olan bu */ $this->bilgi->basarili("Giriş Başarılı","/uye/Form");

  $this->bilgi->direktYonlen("/magaza");


 else:

  $this->view->goster("sayfalar/giris",
  array("bilgi" =>$this->bilgi->uyari("danger","Kullanıcı adı veya şifresi hatalıdır")));

 


  endif;

 endif;



  $this->view->goster("sayfalar/uyeol");
}


}



?>