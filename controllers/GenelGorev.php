<?php

class GenelGorev extends Controller  {
	
	
	function __construct() {
		parent::__construct();
		
	$this->Modelyukle('GenelGorev');
	
	
	}	
	
	function YorumFormKontrol() {
		
	$ad=$this->form->get("ad")->bosmu();
	$yorum=$this->form->get("yorum")->bosmu();
	$urunid=$this->form->get("urunid")->bosmu();
	$tarih=date("d-m-Y");	
	if (!empty($this->form->error)) :
	
	echo $this->bilgi->uyari("danger","LÜTFEN BOŞ ALAN BIRAKMAYINIZ");

	else:
	

	
		$sonuc=$this->model->YorumEkleme("yorumlar",
		array("urunid","ad","icerik","tarih"),
		array($urunid,$ad,$yorum,$tarih));
	
		if ($sonuc==1):
	

		
		echo $this->bilgi->uyari("success","Yorumunuz kayıt edildi. Onaylandıktan sonra yayınlanacaktır",'id="ok"');
		
		else:
		
		
	
		echo $this->bilgi->uyari("danger","HATA OLUŞTU. LÜTFEN DAHA SONRA TEKRAR DENEYİNİZ");
		
		endif;
	
	endif;
	
	
	
		
	} // YORUM  KONTROL
	
	
	
	function BultenKayit() {
		
	$mailadres=$this->form->get("mailadres")->bosmu();	
	$this->form->GercektenMailmi($mailadres);	
	$tarih=date("d-m-Y");
		
	if (!empty($this->form->error)) :
	
	echo $this->bilgi->uyari("danger","GİRİLEN MAİL ADRESİ GEÇERSİZ");

	else:
	

	
		$sonuc=$this->model->BultenEkleme("bulten",
		array("mailadres","tarih"),
		array($mailadres,$tarih));
	
		if ($sonuc==1):
	

		
		echo $this->bilgi->uyari("success","Bultene Başarılı bir şekilde kayıt oldunuz. Teşekkür ederiz",'id="bultenok"');
		
		else:
		
		
	
		echo $this->bilgi->uyari("danger","HATA OLUŞTU. LÜTFEN DAHA SONRA TEKRAR DENEYİNİZ");
		
		endif;
	
	endif;
	
	
	
		
	} // BULTEN KAYIT  KONTROL
	
	function iletisim() {
		
	$ad=$this->form->get("ad")->bosmu();
	$mail=$this->form->get("mail")->bosmu();
	$konu=$this->form->get("konu")->bosmu();
	$mesaj=$this->form->get("mesaj")->bosmu();
	
	
	@$this->form->GercektenMailmi($mail);	
	$tarih=date("d-m-Y");
		
	if (!empty($this->form->error)) :
	
	echo $this->bilgi->uyari("danger","LÜTFEN TÜM BİLGİLERİ UYGUN GİRİNİZ");

	else:
	

	
		$sonuc=$this->model->iletisimForm("iletisim",
		array("ad","mail","konu","mesaj","tarih"),
		array($ad,$mail,$konu,$mesaj,$tarih));
	
		if ($sonuc==1):
	

		
		echo $this->bilgi->uyari("success","Mesajınız Alındı. En kısa sürede Dönüş yapılacaktır. Teşekkür ederiz",'id="formok"');
		
		else:
		
		
	
		echo $this->bilgi->uyari("danger","HATA OLUŞTU. LÜTFEN DAHA SONRA TEKRAR DENEYİNİZ");
		
		endif;
	
	endif;

		
	}
	

	

	
}




?>