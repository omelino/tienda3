<?php /*%%SmartyHeaderCode:2580557ab77c23d3d75-60407380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8abe56e173f1c8209c4e4954a03e6060e7e3cb9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda3\\themes\\nuevo1\\modules\\blockspecials\\blockspecials.tpl',
      1 => 1470855044,
      2 => 'file',
    ),
    '99e187efc59761a1b903805cce60539291573313' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda3\\themes\\nuevo1\\sub\\product\\sidebar.tpl',
      1 => 1470855045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2580557ab77c23d3d75-60407380',
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab77c2425e03_76673194',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab77c2425e03_76673194')) {function content_57ab77c2425e03_76673194($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block block-danger nopadding">
	<h4 class="title_block">
        <a href="http://localhost/tienda3/bajamos-precios" title="Promociones especiales">
            Promociones especiales
        </a>
    </h4>
	<div class="block_content products-block">
             
		<ul class="products products-block">
            <li class="clearfix media">
            
            <div class="product-block">

            <div class="product-container media" itemscope itemtype="https://schema.org/Product">
                 <a class="products-block-image img pull-left" href="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" title=""><img class="replace-2x img-responsive" src="http://localhost/tienda3/12-small_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" itemprop="image" />
                 </a>

                <div class="media-body">
                      <div class="product-content">
                        <h5 class="name media-heading" itemprop="name">
								<a class="product-name" href="http://localhost/tienda3/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
            			Vestido de verano...</a>
                        </h5>
                         								<div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                                                            <span itemprop="price" class="product-price price">
                                    33,62 $                                </span>
                                                                    <span class="old-price product-price">
                                        35,39 $
                                    </span>
                                                                <meta itemprop="priceCurrency" content="0" />
                                                    </div>
                                        </div>
                </div>
            </div>

              
            </div>    
        </li>
    </ul>  
		<div class="lnk">
			<a 
            class="btn-outline button btn" 
            href="http://localhost/tienda3/bajamos-precios" 
            title="Todas los promociones especiales">
                <span>Todas los promociones especiales</span>
            </a>
		</div>
    	</div>
</div>
<!-- /MODULE Block specials --><?php }} ?>
