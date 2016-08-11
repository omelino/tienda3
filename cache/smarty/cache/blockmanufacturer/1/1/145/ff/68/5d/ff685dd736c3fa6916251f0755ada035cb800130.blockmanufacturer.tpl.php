<?php /*%%SmartyHeaderCode:1125457ab77c1e284c7-17401908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff685dd736c3fa6916251f0755ada035cb800130' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda3\\themes\\nuevo1\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1470855043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1125457ab77c1e284c7-17401908',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab77c1e860d3_96034917',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab77c1e860d3_96034917')) {function content_57ab77c1e860d3_96034917($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer noborder">
	<h4 class="title_block">
					<a href="http://localhost/tienda3/fabricantes" title="Fabricantes">
						Fabricantes
					</a>
			</h4>
	<div class="block_content">
								<ul class="list-block list-group bullet">
														<li class="last_item">
						<a 
						href="http://localhost/tienda3/1_fashion-manufacturer" title="Más acerca de Fashion Manufacturer">
							Fashion Manufacturer
						</a>
					</li>
												</ul>
										<form action="/tienda3/index.php" method="get">
					
						<select class="form-control" name="manufacturer_list">
							<option value="0">Todos los fabricantes</option>
													<option value="http://localhost/tienda3/1_fashion-manufacturer">Fashion Manufacturer</option>
												</select>
					
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
