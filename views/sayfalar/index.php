<?php require 'views/header.php'; ?>

<?php 

/*

if (is_array($data)):

	echo '<div class="alert alert-danger mt-5">';
	            foreach ($data as $value):
				
				echo $value."<br>";

				endforeach;
	echo '</div>';
	
	else:

	echo $data;

	endif;
*/
	?>



<div class="banner">
		<div class="container">
<div class="banner-bottom">
	<div class="banner-bottom-left">
		<h2>B<br>U<br>Y</h2>
	</div>
	<div class="banner-bottom-right">
		<div  class="callbacks_container">
					<ul class="rslides" id="slider4">
					<li>
								<div class="banner-info">
									<h3>
									<?php echo  $ayarlar->sloganUst1; ?></h3>
									<p><?php echo  $ayarlar->sloganAlt2;?></p>
								</div>
							</li>
							<li>
								<div class="banner-info">
								   <h3><?php echo  $ayarlar->sloganUst2;
									?></h3>
									<p><?php echo  $ayarlar->sloganAlt2;
									?></p>
								</div>
							</li>
							<li>
								<div class="banner-info">
								  <h3><?php echo  $ayarlar->sloganUst3;
									?></h3>
									<p><?php echo  $ayarlar->sloganAlt3;
									?></p>
								</div>								
							</li>
						</ul>
					</div>
					<!--banner-->
	  			<script src="<?php echo URL;?>/views/design/js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav:false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
	</div>
	<div class="clearfix"> </div>
</div>
	<div class="shop">
		<a href="single.html">HEMEN BAŞLA</a>
	</div>
	</div>
		</div>
		<!-- content-section-starts-here -->
		<div class="container">
			<div class="main-content">
            
			
                
                
				<div class="products-grid">
				<header>
					<h3 class="head text-center">YENİ ÜRÜNLER</h3>
				</header>

                <?php 


				
				foreach ($veri[$data] as $value):

				?>	

			
					echo '<div class="col-md-4 product simpleCart_shelfItem text-center">
					<a href="urundetay/<?php echo $value["id"] ; ?>/<?php echo  $ayarlar->seo($value["urunad"]);  ?>"><img src="<?php echo URL; ?>/views/design/images/<?php  echo $value["res"]; ?>" alt="" /></a>
					<div class="mask">
						<a href="urunler/detay/<?php  echo $value["id"]; ?>/<?php echo  $ayarlar->seo($value["urunad"]) ; ?>">İNCELE</a>
					</div>
					<a class="product_name" href="urunler/detay/<?php  echo $value["id"]; ?>/<?php echo $value["urunad"] ; ?>"><?php  echo $value["urunad"];  ?></a>
					<p><a class="item_add" href="#"><i></i> <span class="item_price" <?php  echo  $value["fiyat"];  ?>>$329</span></a></p>
				</div>'

				<?php
			

				endforeach;
				
				
				
				
				
				?>









					
				
					<div class="clearfix"></div>
				</div>
			</div>

		</div>
		<div class="other-products">
		<div class="container">
			<h3 class="like text-center">EN ÇOK SATANLAR</h3> 
			<ul id="flexselDemo3">       
				
			<?php 

			foreach ($veri["data2"] as $value2):

			?>
				



						<li><a href="urunler/detay/<?php  echo $value2["id"]; ?>/<?php echo $value["urunad"] ; ?>"><img src="<?php echo URL; ?>/views/design/images/<?php  echo $value2["res2"];  ?>" class="img-responsive" 
						alt="<?php echo $value2["urunad"];  ?>" /></a>						
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="urunler/detay/<?php  echo $value2["id"]; ?>/<?php echo $value["urunad"] ; ?>"><?php echo $value["urunad"];   ?></a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price"><?php echo $value2["fiyat"]; ?></span></a></p>
							</div>
						</li>


					<?php

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
				   <script type="text/javascript" src="<?php echo URL;  ?>/views/design/js/jquery.flexisel.js"></script>
				   </div>
				   </div>
		<!-- content-section-ends-here -->
			<div class="news-letter">
			<div class="container">
				<div class="join">
					<h6>BÜLTENE KAYIT</h6>
					<div class="sub-left-right">
						<form>
							<input type="text" value="Mail Adresinizi Yazınız" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email Here';}" />
							<input type="submit" value="KAYIT OL" />
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>

<?php require 'views/footer.php'; ?>



