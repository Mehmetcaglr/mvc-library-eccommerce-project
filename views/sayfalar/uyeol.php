<?php require 'views/header.php'; ?>


 <div class="registration-form">
	<div class="container">
	<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                     <a href="<?php echo URL; ?>" title="Anasayfa">Anasayfa</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                      Üye Ol
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="<?php echo URL; ?>">Geri Dön</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
               	       
               
               
               
	
            <?php
			
			/*
			
			if (is_array($veri["bilgi"])) :
										
				foreach ($veri["bilgi"] as $value) :
			   
			   			echo $value."<br>";
								   
								   
		 	 endforeach;
										 
				 else:
										 
										 
				echo $veri["bilgi"];
										
		endif;
			
			
			
			*/
								
								
								
								if (isset($veri["bilgi"])) :							
										 
										 
								echo $veri["bilgi"];
							
								
								else:
								
								
				
			   
			   ?>
               
               	<h2>ÜYE KAYIT FORMU</h2>
		<div class="registration-grids">
      
       <?php
	   
	   	if (isset($veri["hata"])) :	
				echo '<div class="alert alert-danger mt-5">';						
			foreach ($veri["hata"] as $value) :
			   
	   		echo ucfirst($value)."<br>";								   
								   
		 	 endforeach;	
				echo '</div>';				
		endif;
	   
	   ?>
       
			<div class="reg-form">
				<div class="reg">
					 <p>Welcome, please enter the following details to continue.
                     </p>
                     
                     <?php 
					 
		 /* Form::Form_Olustur(
		  array(
		  "action@".URL."/uye/kayitkontrol",
		  "method@POST",
		  "enctype@multipart/form-data"	
		  )); */
					 
					 
					 
					 Form::Olustur("1",array(
					 "action" => URL."/uye/kayitkontrol",
					 "method" => "POST"				
					 ));   ?>
			
	
						 <ul>
							 <li class="text-info"><span class="text-danger">*</span>Adınız: </li>
							 <li>
                             
                             <?php
 Form::Olustur("2",array("type"=>"text","name"=>"ad","required"=>"required")); ?>
                           </li>
						 </ul>
						 <ul>
							 <li class="text-info"><span class="text-danger">*</span> Soyadınız: </li>
							 <li>      <?php
 Form::Olustur("2",array("type"=>"text","name"=>"soyad","required"=>"required")); ?></li>
						 </ul>				 
						<ul>
							 <li class="text-info"><span class="text-danger">*</span> Mail Adresi: </li>
							 <li>      <?php
 Form::Olustur("2",array("type"=>"text","name"=>"mail","required"=>"required")); ?></li>
						 </ul>
						 <ul>
							 <li class="text-info"><span class="text-danger">*</span> Sifre: </li>
							 <li>      <?php
 Form::Olustur("2",array("type"=>"password","name"=>"sifre","required"=>"required")); ?></li>
						 </ul>
						 <ul>
							 <li class="text-info"><span class="text-danger">*</span> Sifre Tekrar:</li>
							 <li><?php
 Form::Olustur("2",array("type"=>"password","name"=>"sifretekrar","required"=>"required")); ?></li>
						 </ul>
						 <ul>
							 <li class="text-info"><span class="text-danger">*</span> Telefon:</li>
							 <li> <?php
 Form::Olustur("2",array("type"=>"text","name"=>"telefon","required"=>"required")); ?></li>  	
						 </ul>		
                         
                         	 <ul>
                             
							 <li class="text-success"><span class="text-danger">* İşaretler zorunlu alandır</span> </li>
							 
						 </ul>	
                         
               
               
                  
                         
                         
                         
                     <?php
 Form::Olustur("2",array("type"=>"submit","value"=>"TAMAMLA")); ?>     
                         
            
						 <p class="click">Üye olarak politikaları kabul etmiş olursunuz.  <a href="#">Gizlilik politikası</a></p> 
					 </form>
				 </div>
			</div>
			<div class="reg-right">
				 <h3>Üyelik tamamen ücretsiz</h3>
				 <div class="strip"></div>
				 <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
				 libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
				 <h3 class="lorem">Üyelik Avantajları</h3>
				 <div class="strip"></div>
				 <p>Tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>



<?php 

endif;

require 'views/footer.php'; ?> 		
        
        
        
       