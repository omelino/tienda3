<?php /*%%SmartyHeaderCode:2592657ab77bfb1e761-69173215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb5c5a7d7c107dfbb03ee85e6e24c5b651d5dfb6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda3\\modules\\leomanagewidgets\\views\\widgets\\group.tpl',
      1 => 1470854972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2592657ab77bfb1e761-69173215',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab77c6b37770_33817853',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab77c6b37770_33817853')) {function content_57ab77c6b37770_33817853($_smarty_tpl) {?>
            <div class="row" 
                    >
            
                                                                                    <div class="widget col-lg-9 col-md-9 col-sm-9 col-xs-12 col-sp-12"
                            >
                                                                                                
  

    <!-- main slider carousel -->
    <div class="row">
        <div class="col-md-12" id="slider">
                <div id="carousel-example-generic">
                    <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" ></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3" ></li>
                
            </ol>
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                              <div class="item active " data-slide-number="0">
                                                          <img src="/tienda3/themes/nuevo1/img/modules/leotempcp/image/slide3.jpg" alt="" style="width:857px;height:450px" class="img-responsive">
                                       
                    <div class="carousel-caption">
                                           
                    </div>
                </div>
                              <div class="item  " data-slide-number="1">
                                                          <img src="/tienda3/themes/nuevo1/img/modules/leotempcp/image/slide4.jpg" alt="" style="width:857px;height:450px" class="img-responsive">
                                       
                    <div class="carousel-caption">
                                           
                    </div>
                </div>
                              <div class="item  " data-slide-number="2">
                                                          <img src="/tienda3/themes/nuevo1/img/modules/leotempcp/image/slide1.jpg" alt="" style="width:857px;height:450px" class="img-responsive">
                                       
                    <div class="carousel-caption">
                                          <h3>
                                                  Build your own bundle
                                              </h3>
                                        <p>Save up to $50</p>   
                    </div>
                </div>
                              <div class="item  " data-slide-number="3">
                                                          <img src="/tienda3/themes/nuevo1/img/modules/leotempcp/image/slide2.jpg" alt="" style="width:857px;height:450px" class="img-responsive">
                                       
                    <div class="carousel-caption">
                                          <h3>
                                                  Build your own bundle
                                              </h3>
                                        <p>Save up to $50</p>   
                    </div>
                </div>
                                      </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="fa fa-angle-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="fa fa-angle-right"></span>
            </a>
                    </div>
                </div>
          <!-- Controls -->

        </div>
   
    <!--/main slider carousel-->
</div>

  
<script type="text/javascript">

$('#myCarousel').carousel({
    interval: 6000
});

// handles the carousel thumbnails
$('[id^=carousel-selector-]').click( function(){
  var id_selector = $(this).attr("id");
  var id = id_selector.substr(id_selector.length -1);
  id = parseInt(id);
  $('#myCarousel').carousel(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $(this).addClass('selected');
});

// when the carousel slides, auto update
$('#myCarousel').on('slid', function (e) {
  var id = $('.item.active').data('slide-number');
  id = parseInt(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $('[id^=carousel-selector-'+id+']').addClass('selected');
});

</script>                                                                                    </div>
                                                                                <div class="widget col-lg-3 col-md-3 col-sm-3 col-xs-12 col-sp-12 nopadding noborder custom_slide hidden-sp hidden-xs"
                            >
                                                                                                <div class="widget-html block">
		<div class="custom_content">
		<div class="effect"><a href="#"><img class="img-responsive" src="/tienda3/themes/ap_office/img/modules/leomanagewidgets/img-banner-1.jpg" alt="" /></a></div>
<div class="effect"><a href="#"><img class="img-responsive" src="/tienda3/themes/ap_office/img/modules/leomanagewidgets/img-banner-2.jpg" alt="" /></a></div>
	</div>
</div>
                                                                                    </div>
                                                                                <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12"
                            >
                                                                                                
<div class="products_block exclusive leomanagerwidgets  block" >
		<h4 class="page-subheading">
		Mejor vendido
	</h4>
		<div class="block_content">	
					<div class="carousel slide carousel-fade" id="leoproductcarousel15831">
	
	<div class="carousel-inner">
							<div class="item active">
				<div class="grid">
																<div class="row no-margin">
											<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 first_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="2"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/blusas/2-blusa.html" title="Blusa" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/7-home_default/blusa.jpg" alt="Blusa" title="Blusa" itemprop="image" />
				<span class="product-additional" data-idproduct="2"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/blusas/2-blusa.html" rel="http://localhost/tienda3/blusas/2-blusa.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/blusas/2-blusa.html" data-id-product="2" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/blusas/2-blusa.html" title="Blusa" itemprop="url" >
						Blusa
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Blusa de manga corta con detalle drapeado muy femenino en la manga.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								31,32 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=2&amp;ipa=7&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="7" data-id-product="2" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="3"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/vestidos-informales/3-vestido-estampado.html" title="Vestido estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/8-home_default/vestido-estampado.jpg" alt="Vestido estampado" title="Vestido estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="3"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/vestidos-informales/3-vestido-estampado.html" rel="http://localhost/tienda3/vestidos-informales/3-vestido-estampado.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/vestidos-informales/3-vestido-estampado.html" data-id-product="3" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/vestidos-informales/3-vestido-estampado.html" title="Vestido estampado" itemprop="url" >
						Vestido estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido doble estampado 100% algodón. Top de rayas negras y blancas y falda skater naranja de cintura alta.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								30,16 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=3&amp;ipa=13&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="13" data-id-product="3" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="1"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/camisetas/1-camiseta-destenida-manga-corta.html" title="Camiseta efecto desteñido de manga corta" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/1-home_default/camiseta-destenida-manga-corta.jpg" alt="Camiseta efecto desteñido de manga corta" title="Camiseta efecto desteñido de manga corta" itemprop="image" />
				<span class="product-additional" data-idproduct="1"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/camisetas/1-camiseta-destenida-manga-corta.html" rel="http://localhost/tienda3/camisetas/1-camiseta-destenida-manga-corta.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/camisetas/1-camiseta-destenida-manga-corta.html" data-id-product="1" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/camisetas/1-camiseta-destenida-manga-corta.html" title="Camiseta efecto desteñido de manga corta" itemprop="url" >
						Camiseta efecto desteñido de manga corta
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Camiseta de manga corta con efecto desteñido  y escote cerrado. Material suave y elástico para un ajuste cómodo. ¡Combínala con un sombrero de paja y estarás lista para el verano!
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								19,15 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=1&amp;ipa=1&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="1" data-id-product="1" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="7"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/20-home_default/vestido-estampado-gasa.jpg" alt="Vestido de gasa estampado" title="Vestido de gasa estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="7"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" rel="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" data-id-product="7" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url" >
						Vestido de gasa estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido sin mangas hasta la rodilla, tejido de gasa estampado. Escote pronunciado.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
															<span class="product-cold">
									
									<span class="old-price product-price">
										23,78 $
									</span>
									
																			<span class="price-percent-reduction">-20%</span>
																	</span>
							<br />
							<span class="price product-price">
								19,03 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=7&amp;ipa=34&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="34" data-id-product="7" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
																<div class="row no-margin">
											<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="6"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/vestidos-verano/6-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/16-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="6"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/vestidos-verano/6-vestido-verano-estampado.html" rel="http://localhost/tienda3/vestidos-verano/6-vestido-verano-estampado.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/vestidos-verano/6-vestido-verano-estampado.html" data-id-product="6" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/vestidos-verano/6-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
						Vestido de verano estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido sin mangas de gasa hasta la rodilla. Escote en V con elástico debajo del pecho.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								35,38 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=6&amp;ipa=31&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="31" data-id-product="6" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 last_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="5"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/12-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="5"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" rel="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" data-id-product="5" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
						Vestido de verano estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido largo estampado con tirantes finos ajustables. Escote en V, fruncido debajo del pecho y volantes en la parte inferior del vestido.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
															<span class="product-cold">
									
									<span class="old-price product-price">
										35,39 $
									</span>
									
																			<span class="price-percent-reduction">-5%</span>
																	</span>
							<br />
							<span class="price product-price">
								33,62 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=5&amp;ipa=19&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="19" data-id-product="5" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
									</div>
		    </div>		
	    	</div>
</div>





			</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#leoproductcarousel15831').each(function(){
        $(this).carousel({
            pause: 'hover',
            interval: 0
        });
    });
});
</script>
                                                                                    </div>
                                                                                <div class="widget col-lg-6 col-md-6 col-sm-6 col-xs-6 col-sp-12 nopadding noborder nomargin"
                            >
                                                                                                <div class="widget-html block">
		<div class="custom_content">
		<div class="effect"><a href="#"><img class="img-responsive" src="/tienda3/themes/ap_office/img/modules/leomanagewidgets/home1.jpg" alt="" /></a></div>
	</div>
</div>
                                                                                    </div>
                                                                                <div class="widget col-lg-6 col-md-6 col-sm-6 col-xs-6 col-sp-12 nopadding noborder nomargin"
                            >
                                                                                                <div class="widget-html block">
		<div class="custom_content">
		<div class="effect"><a href="#"><img class="img-responsive" src="/tienda3/themes/ap_office/img/modules/leomanagewidgets/home2.jpg" alt="" /></a></div>
	</div>
</div>
                                                                                    </div>
                                                                                <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12"
                            >
                                                                                                
<!-- MODULE Block specials -->
<div id="leoproducttab12399" class="products_block exclusive block producttab">
		<div class="block_content">			            
			<ul id="productTabs" class="nav nav-tabs">
			  	
              <li><a href="#leoproducttab12399special" data-toggle="tab">Special</a></li>
			                 	
              <li><a href="#leoproducttab12399newproducts" data-toggle="tab"><span></span>New Arrivals</a></li>
			  			  			  	
              <li><a href="#leoproducttab12399featured" data-toggle="tab"><span></span>Featured Products</a></li>
			              </ul>
			
            <div id="product_tab_content"><div class="product_tab_content tab-content">
			   	
					<div class="tab-pane" id="leoproducttab12399special">
										<div class="carousel slide carousel-fade" id="leoproducttab12399-special">
	
	<div class="carousel-inner">
							<div class="item active">
				<div class="grid">
																<div class="row no-margin">
											<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 first_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="5"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/12-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="5"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" rel="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" data-id-product="5" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
						Vestido de verano estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido largo estampado con tirantes finos ajustables. Escote en V, fruncido debajo del pecho y volantes en la parte inferior del vestido.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
															<span class="product-cold">
									
									<span class="old-price product-price">
										35,39 $
									</span>
									
																			<span class="price-percent-reduction">-5%</span>
																	</span>
							<br />
							<span class="price product-price">
								33,62 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=5&amp;ipa=19&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="19" data-id-product="5" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 last_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="7"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/20-home_default/vestido-estampado-gasa.jpg" alt="Vestido de gasa estampado" title="Vestido de gasa estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="7"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" rel="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" data-id-product="7" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url" >
						Vestido de gasa estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido sin mangas hasta la rodilla, tejido de gasa estampado. Escote pronunciado.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
															<span class="product-cold">
									
									<span class="old-price product-price">
										23,78 $
									</span>
									
																			<span class="price-percent-reduction">-20%</span>
																	</span>
							<br />
							<span class="price product-price">
								19,03 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=7&amp;ipa=34&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="34" data-id-product="7" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
									</div>
		    </div>		
	    	</div>
</div>





	              </div>
			   			  		  
              <div class="tab-pane" id="leoproducttab12399newproducts">
					 					<div class="carousel slide carousel-fade" id="leoproducttab12399-newproducts">
		 
	 	<a class="carousel-control left" href="#leoproducttab12399-newproducts"   data-slide="prev"></a>
		<a class="carousel-control right" href="#leoproducttab12399-newproducts"  data-slide="next"></a>
	
	<div class="carousel-inner">
							<div class="item active">
				<div class="grid">
																<div class="row no-margin">
											<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 first_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="1"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/camisetas/1-camiseta-destenida-manga-corta.html" title="Camiseta efecto desteñido de manga corta" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/1-home_default/camiseta-destenida-manga-corta.jpg" alt="Camiseta efecto desteñido de manga corta" title="Camiseta efecto desteñido de manga corta" itemprop="image" />
				<span class="product-additional" data-idproduct="1"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/camisetas/1-camiseta-destenida-manga-corta.html" rel="http://localhost/tienda3/camisetas/1-camiseta-destenida-manga-corta.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/camisetas/1-camiseta-destenida-manga-corta.html" data-id-product="1" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/camisetas/1-camiseta-destenida-manga-corta.html" title="Camiseta efecto desteñido de manga corta" itemprop="url" >
						Camiseta efecto desteñido de manga corta
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Camiseta de manga corta con efecto desteñido  y escote cerrado. Material suave y elástico para un ajuste cómodo. ¡Combínala con un sombrero de paja y estarás lista para el verano!
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								19,15 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=1&amp;ipa=1&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="1" data-id-product="1" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="2"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/blusas/2-blusa.html" title="Blusa" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/7-home_default/blusa.jpg" alt="Blusa" title="Blusa" itemprop="image" />
				<span class="product-additional" data-idproduct="2"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/blusas/2-blusa.html" rel="http://localhost/tienda3/blusas/2-blusa.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/blusas/2-blusa.html" data-id-product="2" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/blusas/2-blusa.html" title="Blusa" itemprop="url" >
						Blusa
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Blusa de manga corta con detalle drapeado muy femenino en la manga.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								31,32 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=2&amp;ipa=7&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="7" data-id-product="2" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="3"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/vestidos-informales/3-vestido-estampado.html" title="Vestido estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/8-home_default/vestido-estampado.jpg" alt="Vestido estampado" title="Vestido estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="3"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/vestidos-informales/3-vestido-estampado.html" rel="http://localhost/tienda3/vestidos-informales/3-vestido-estampado.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/vestidos-informales/3-vestido-estampado.html" data-id-product="3" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/vestidos-informales/3-vestido-estampado.html" title="Vestido estampado" itemprop="url" >
						Vestido estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido doble estampado 100% algodón. Top de rayas negras y blancas y falda skater naranja de cintura alta.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								30,16 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=3&amp;ipa=13&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="13" data-id-product="3" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 last_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="4"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/vestidos-noche/4-vestido-estampado.html" title="Vestido estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/10-home_default/vestido-estampado.jpg" alt="Vestido estampado" title="Vestido estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="4"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/vestidos-noche/4-vestido-estampado.html" rel="http://localhost/tienda3/vestidos-noche/4-vestido-estampado.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/vestidos-noche/4-vestido-estampado.html" data-id-product="4" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/vestidos-noche/4-vestido-estampado.html" title="Vestido estampado" itemprop="url" >
						Vestido estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido de noche estampado con mangas rectas, cinturón negro y volantes.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								59,15 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=4&amp;ipa=16&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="16" data-id-product="4" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
									</div>
		    </div>		
	    			<div class="item ">
				<div class="grid">
																<div class="row no-margin">
											<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 first_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="5"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/12-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="5"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" rel="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" data-id-product="5" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
						Vestido de verano estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido largo estampado con tirantes finos ajustables. Escote en V, fruncido debajo del pecho y volantes en la parte inferior del vestido.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
															<span class="product-cold">
									
									<span class="old-price product-price">
										35,39 $
									</span>
									
																			<span class="price-percent-reduction">-5%</span>
																	</span>
							<br />
							<span class="price product-price">
								33,62 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=5&amp;ipa=19&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="19" data-id-product="5" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="6"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/vestidos-verano/6-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/16-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="6"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/vestidos-verano/6-vestido-verano-estampado.html" rel="http://localhost/tienda3/vestidos-verano/6-vestido-verano-estampado.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/vestidos-verano/6-vestido-verano-estampado.html" data-id-product="6" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/vestidos-verano/6-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
						Vestido de verano estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido sin mangas de gasa hasta la rodilla. Escote en V con elástico debajo del pecho.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								35,38 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=6&amp;ipa=31&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="31" data-id-product="6" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 last_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="7"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/20-home_default/vestido-estampado-gasa.jpg" alt="Vestido de gasa estampado" title="Vestido de gasa estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="7"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" rel="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" data-id-product="7" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url" >
						Vestido de gasa estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido sin mangas hasta la rodilla, tejido de gasa estampado. Escote pronunciado.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
															<span class="product-cold">
									
									<span class="old-price product-price">
										23,78 $
									</span>
									
																			<span class="price-percent-reduction">-20%</span>
																	</span>
							<br />
							<span class="price product-price">
								19,03 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=7&amp;ipa=34&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="34" data-id-product="7" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
									</div>
		    </div>		
	    	</div>
</div>





              </div>
			 	
			 	
			 		  
              <div class="tab-pane" id="leoproducttab12399featured">
					 					<div class="carousel slide carousel-fade" id="leoproducttab12399-featured">
		 
	 	<a class="carousel-control left" href="#leoproducttab12399-featured"   data-slide="prev"></a>
		<a class="carousel-control right" href="#leoproducttab12399-featured"  data-slide="next"></a>
	
	<div class="carousel-inner">
							<div class="item active">
				<div class="grid">
																<div class="row no-margin">
											<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 first_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="1"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/camisetas/1-camiseta-destenida-manga-corta.html" title="Camiseta efecto desteñido de manga corta" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/1-home_default/camiseta-destenida-manga-corta.jpg" alt="Camiseta efecto desteñido de manga corta" title="Camiseta efecto desteñido de manga corta" itemprop="image" />
				<span class="product-additional" data-idproduct="1"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/camisetas/1-camiseta-destenida-manga-corta.html" rel="http://localhost/tienda3/camisetas/1-camiseta-destenida-manga-corta.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/camisetas/1-camiseta-destenida-manga-corta.html" data-id-product="1" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/camisetas/1-camiseta-destenida-manga-corta.html" title="Camiseta efecto desteñido de manga corta" itemprop="url" >
						Camiseta efecto desteñido de manga corta
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Camiseta de manga corta con efecto desteñido  y escote cerrado. Material suave y elástico para un ajuste cómodo. ¡Combínala con un sombrero de paja y estarás lista para el verano!
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								19,15 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=1&amp;ipa=1&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="1" data-id-product="1" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="2"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/blusas/2-blusa.html" title="Blusa" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/7-home_default/blusa.jpg" alt="Blusa" title="Blusa" itemprop="image" />
				<span class="product-additional" data-idproduct="2"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/blusas/2-blusa.html" rel="http://localhost/tienda3/blusas/2-blusa.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/blusas/2-blusa.html" data-id-product="2" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/blusas/2-blusa.html" title="Blusa" itemprop="url" >
						Blusa
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Blusa de manga corta con detalle drapeado muy femenino en la manga.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								31,32 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=2&amp;ipa=7&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="7" data-id-product="2" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="3"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/vestidos-informales/3-vestido-estampado.html" title="Vestido estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/8-home_default/vestido-estampado.jpg" alt="Vestido estampado" title="Vestido estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="3"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/vestidos-informales/3-vestido-estampado.html" rel="http://localhost/tienda3/vestidos-informales/3-vestido-estampado.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/vestidos-informales/3-vestido-estampado.html" data-id-product="3" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/vestidos-informales/3-vestido-estampado.html" title="Vestido estampado" itemprop="url" >
						Vestido estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido doble estampado 100% algodón. Top de rayas negras y blancas y falda skater naranja de cintura alta.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								30,16 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=3&amp;ipa=13&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="13" data-id-product="3" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 last_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="4"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/vestidos-noche/4-vestido-estampado.html" title="Vestido estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/10-home_default/vestido-estampado.jpg" alt="Vestido estampado" title="Vestido estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="4"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/vestidos-noche/4-vestido-estampado.html" rel="http://localhost/tienda3/vestidos-noche/4-vestido-estampado.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/vestidos-noche/4-vestido-estampado.html" data-id-product="4" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/vestidos-noche/4-vestido-estampado.html" title="Vestido estampado" itemprop="url" >
						Vestido estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido de noche estampado con mangas rectas, cinturón negro y volantes.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								59,15 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=4&amp;ipa=16&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="16" data-id-product="4" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
									</div>
		    </div>		
	    			<div class="item ">
				<div class="grid">
																<div class="row no-margin">
											<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 first_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="5"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/12-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="5"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" rel="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" data-id-product="5" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
						Vestido de verano estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido largo estampado con tirantes finos ajustables. Escote en V, fruncido debajo del pecho y volantes en la parte inferior del vestido.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
															<span class="product-cold">
									
									<span class="old-price product-price">
										35,39 $
									</span>
									
																			<span class="price-percent-reduction">-5%</span>
																	</span>
							<br />
							<span class="price product-price">
								33,62 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=5&amp;ipa=19&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="19" data-id-product="5" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="6"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/vestidos-verano/6-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/16-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="6"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/vestidos-verano/6-vestido-verano-estampado.html" rel="http://localhost/tienda3/vestidos-verano/6-vestido-verano-estampado.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/vestidos-verano/6-vestido-verano-estampado.html" data-id-product="6" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/vestidos-verano/6-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
						Vestido de verano estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido sin mangas de gasa hasta la rodilla. Escote en V con elástico debajo del pecho.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								35,38 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=6&amp;ipa=31&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="31" data-id-product="6" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class="no-padding ajax_block_product col-md-3 col-xs-6 col-sp-12 last_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="7"></div>
			<a class="product_img_link"	href="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda3/20-home_default/vestido-estampado-gasa.jpg" alt="Vestido de gasa estampado" title="Vestido de gasa estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="7"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" rel="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" data-id-product="7" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda3/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url" >
						Vestido de gasa estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido sin mangas hasta la rodilla, tejido de gasa estampado. Escote pronunciado.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
															<span class="product-cold">
									
									<span class="old-price product-price">
										23,78 $
									</span>
									
																			<span class="price-percent-reduction">-20%</span>
																	</span>
							<br />
							<span class="price product-price">
								19,03 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda3/carrito?add=1&amp;id_product=7&amp;ipa=34&amp;token=e3a7844107323a4ddb09b4b7358d7f35" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="34" data-id-product="7" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
									</div>
		    </div>		
	    	</div>
</div>





              </div>   
			  	
			 
			</div></div>
        
		
	</div>
</div>
<!-- /MODULE Block specials -->
<script>
$(document).ready(function() {
    $('#leoproducttab12399 .carousel').each(function(){
        $(this).carousel({
            pause: 'hover',
            interval: 0
        });
    });
 
	$("#leoproducttab12399 .nav-tabs li", this).first().addClass("active");
	$("#leoproducttab12399 .tab-content .tab-pane", this).first().addClass("active");
 
});
</script>
                                                                                     </div>
                                                        </div>
    <?php }} ?>
