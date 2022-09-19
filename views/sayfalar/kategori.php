<?php require 'views/header.php'; ?>


	<!-- content-section-starts -->
	<div class="container">
	   <div class="products-page">
			<div class="products">
				<div class="product-listy">
					<h2>DİĞER KATEGORİLER</h2>
					<ul class="product-list">
			                <?php
			   foreach ($veri["data2"] as $value) :
			   
	
 echo '<li><a href="'.URL.'/urunler/detay/'.$value["id"].'/'. $ayarlar->seo($value["ad"]).'">'.$value["ad"].'</a></li>';
					   
			
			   
			   endforeach;
					
					?>
						
					</ul>
				</div>
				
            
				

			</div>
			<div class="new-product">
            
            			    <div class="container">
                	<div class="row">
                    
                    <div class="col-md-6"><label>Kaç adet gösterilsin</label>
                  <select >
                            <option value="" selected="selected">
                    9                </option>
                            <option value="">
                    15                </option>
                            <option value="">
                    30                </option>
                  </select> </div>
                  
                  
                     <div class="col-md-6"> <label>Sıralama </label>
			            <select >
			               
			                            <option value="">
			                   İndirim Oranı              </option>
			                            <option value="">
			                    Fiyat Artan                </option>
                                 <option value="">
			                    Fiyat Azalan                </option>
			            </select></div>
                    
                    
                    </div>
                
                
                </div>
			
				
			        <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
                    
             
					<div class="clearfix"></div>
                    
               
                    
                    
					<ul>
                    
                    
                              <?php
			   foreach ($veri["data1"] as $value) :
			   
			   
			   echo '<li>
							<a class="cbp-vm-image" href="'.URL.'/urunler/detay/'.$value["id"].'/'. $ayarlar->seo($value["urunad"]).'">
								<div class="simpleCart_shelfItem">
							 <div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
	<img src="'.URL.'/views/design/images/'.$value["res1"].'" class="img-responsive" alt="'.$value["urunad"].'"/>
									<div class="mask">
			                       		<div class="info">İNCELE</div>
					                  </div>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">'.$value["urunad"].'</p>
									   </div>
			 <div class="pricey"><span class="item_price">'. number_format($value["fiyat"],2,'.',',').'</span></div>
									   <div class="clearfix"></div>
								     </div>		
								  </div>
			                     </div>
		                      </div>
		                    </a>
					
							<a class="cbp-vm-icon cbp-vm-add item_add" href="#">Ekle</a>
							</div>
						</li>';
			   
	

					   
			
			   
			   endforeach;
					
					?>
                    
				
                        
                                               
						
					</ul>
				</div>
				<script src="<?php echo URL; ?>/views/design/js/cbpViewModeSwitch.js" type="text/javascript"></script>
                <script src="<?php echo URL; ?>/views/design/js/classie.js" type="text/javascript"></script>
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
   </div>
   <!-- content-section-ends -->
		<div class="other-products">
		<div class="container">
			<h3 class="like text-center">ÖNE ÇIKAN ÜRÜNLER</h3>        			
				     <ul id="flexiselDemo3">
                     
                     
                                 <?php
			   foreach ($veri["data3"] as $value) :
			   
			   
			   
			           
                     
					echo'	<li><a href="'.URL.'/urunler/detay/'.$value["id"].'/'. $ayarlar->seo($value["urunad"]).'"><img src="'.URL.'/views/design/images/'.$value["res1"].'" alt="'.$value["urunad"].'" class="img-responsive"/></a>
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="'.URL.'/urunler/detay/'.$value["id"].'/'. $ayarlar->seo($value["urunad"]).'">'.$value["urunad"].'</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">'. number_format($value["fiyat"],2,'.',',').'</span></a></p>
							</div>
						</li>';
			   
	

			   
			   endforeach;
					
					?>
                     
                     
                     
          
                        
                        
                        
				     </ul>
				    <script type="text/javascript">
					 $(window).load(function() {
						$("#flexiselDemo3").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
					    	responsiveBreakpoints: { 
					    		portrait: { 
					    			changePoint:480,
					    			visibleItems: 1
					    		}, 
					    		landscape: { 
					    			changePoint:640,
					    			visibleItems: 2
					    		},
					    		tablet: { 
					    			changePoint:768,
					    			visibleItems: 3
					    		}
					    	}
					    });
					    
					});
				   </script>
			   <script type="text/javascript" src="<?php echo URL; ?>/views/design/js/jquery.flexisel.js"></script>
				   </div>
				   </div>
		<!-- content-section-ends-here -->




<?php require 'views/footer.php'; ?> 		
        
        
        
       