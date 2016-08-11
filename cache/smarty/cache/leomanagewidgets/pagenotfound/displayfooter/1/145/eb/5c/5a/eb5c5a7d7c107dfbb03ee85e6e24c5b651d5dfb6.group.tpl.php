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
  'unifunc' => 'content_57ac7c0170efb5_17657066',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ac7c0170efb5_17657066')) {function content_57ac7c0170efb5_17657066($_smarty_tpl) {?>
            <div class="row" 
                    >
            
                                                                                    <div class="widget col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12"
                            >
                                                                                                	<!-- Block CMS module footer -->
	<div class="footer-block block" id="block_various_links_footer">
		<h4 class="title_block">Información</h4>
		<ul class="toggle-footer list-group bullet">
							<li class="item">
					<a href="http://localhost/tienda3/bajamos-precios" title="Promociones especiales">
						Promociones especiales
					</a>
				</li>
									<li class="item">
				<a href="http://localhost/tienda3/nuevos-productos" title="Novedades">
					Novedades
				</a>
			</li>
										<li class="item">
					<a href="http://localhost/tienda3/mas-vendido" title="¡Lo más vendido!">
						¡Lo más vendido!
					</a>
				</li>
										<li class="item">
					<a href="http://localhost/tienda3/tiendas" title="Nuestras tiendas">
						Nuestras tiendas
					</a>
				</li>
									<li class="item">
				<a href="http://localhost/tienda3/contactanos" title="Contacte con nosotros">
					Contacte con nosotros
				</a>
			</li>
															<li class="item">
						<a href="http://localhost/tienda3/content/3-terminos-y-condiciones-de-uso" title="Términos y condiciones">
							Términos y condiciones
						</a>
					</li>
																<li class="item">
						<a href="http://localhost/tienda3/content/4-sobre-nosotros" title="Sobre nosotros">
							Sobre nosotros
						</a>
					</li>
													<li>
				<a href="http://localhost/tienda3/mapa-web" title="Mapa del sitio">
					Mapa del sitio
				</a>
			</li>
									<li>
				<span>
					<a class="_blank" href="http://www.prestashop.com"> © 2016 - Ecommerce software by PrestaShop™ </a>
				</span>
			</li>
					</ul>
		
	</div>
	<!-- /Block CMS module footer -->
                                                                                    </div>
                                                                                <div class="widget col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12"
                            >
                                                                                                                                                                                    </div>
                                                                                <div class="widget col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12"
                            >
                                                                                                 
<div class="widget-twitter block">
		<h4 class="title_block">
		Últimas Tweet
	</h4>
		<div class="block_content">
		<div id="leo-twitter625941881705205762" class="leo-twitter">
			<a class="twitter-timeline" data-dnt="true"  data-theme="light" data-link-color="#000" data-chrome="noheader nofooter noborders transparent" data-border-color="#000" lang="es" data-tweet-limit="2" data-show-replies="0" href="https://twitter.com/leotheme"  data-widget-id="625941881705205762"  >Tweets by @leotheme</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>	
	</div>
</div>
 
<script type="text/javascript">

// Customize twitter feed
var hideTwitterAttempts = 0;
function hideTwitterBoxElements() {
 setTimeout( function() {
  if ( $('[id*=leo-twitter625941881705205762]').length ) {
   $('#leo-twitter625941881705205762 iframe').each( function(){
    var ibody = $(this).contents().find( 'body' );
	var show_scroll =  0; 
	var height =  200+'px'; 
    if ( ibody.find( '.timeline .stream .h-feed li.tweet' ).length ) {
		ibody.find( '.e-entry-title' ).css( 'color', '#000' );
		ibody.find( '.header .p-nickname' ).css( 'color', '#000' );
		ibody.find( '.p-name' ).css( 'color', '#000' );
		if(show_scroll == 1){
			ibody.find( '.timeline .stream' ).css( 'max-height', height );
			ibody.find( '.timeline .stream' ).css( 'overflow-y', 'auto' );	
			ibody.find( '.timeline .twitter-timeline' ).css( 'height', 'inherit !important' );	
		}
    } else {
     $(this).hide();
    }
   });
  }
  hideTwitterAttempts++;
  if ( hideTwitterAttempts < 3 ) {
   hideTwitterBoxElements();
  }
 }, 1500);
}
// somewhere in your code after html page load
hideTwitterBoxElements();

</script>
                                                                                    </div>
                                                                                <div class="widget col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12"
                            >
                                                                                                <!-- MODULE Block contact infos -->
<section id="block_contact_infos">
	<div>
        <ul>
            <img src="http://localhost/tienda3/themes/nuevo1/img/default/logo-footer.png" />
                        	<li class="company">
            		My Company, 42 Puffin street
12345 Puffinville
France            	</li>
                                    	<li class="phone">
            		<i class="fa fa-phone"></i>Llámanos ahora: 
            		<span>0123-456-789</span>
            	</li>
                                    	<li class="mail">
            		<i class="fa fa-envelope"></i>Email: 
            		<span><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;%73%61%6c%65%73@%79%6f%75%72%63%6f%6d%70%61%6e%79.%63%6f%6d" >&#x73;&#x61;&#x6c;&#x65;&#x73;&#x40;&#x79;&#x6f;&#x75;&#x72;&#x63;&#x6f;&#x6d;&#x70;&#x61;&#x6e;&#x79;&#x2e;&#x63;&#x6f;&#x6d;</a></span>
            	</li>
                    </ul>
    </div>
</section>
<!-- /MODULE Block contact infos -->
                                                                                    </div>
                                                        </div>
    <?php }} ?>
