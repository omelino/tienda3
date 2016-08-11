<?php /*%%SmartyHeaderCode:1871557ab77c1700293-08528609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4af49ee319333626c2eb5c79b7da0283439daf1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda3\\themes\\nuevo1\\modules\\blockcategories\\blockcategories.tpl',
      1 => 1470855043,
      2 => 'file',
    ),
    '5c690867dc278738a90403ba433af5561084f75f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda3\\themes\\nuevo1\\modules\\blockcategories\\category-tree-branch.tpl',
      1 => 1470855043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1871557ab77c1700293-08528609',
  'variables' => 
  array (
    'blockCategTree' => 0,
    'currentCategory' => 0,
    'isDhtml' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab77c1784fb2_46926852',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab77c1784fb2_46926852')) {function content_57ab77c1784fb2_46926852($_smarty_tpl) {?><!-- Block categories module -->
<div id="categories_block_left" class="block block-highlighted">
	<h4 class="title_block">
					Categorías
			</h4>
	<div class="block_content">
		<ul class="list-block list-group bullet tree dhtml">
												
<li class="last">
	<a href="http://localhost/tienda3/3-mujer" title="Mujer">
		Mujer
		<span id="leo-cat-3" style="display:none" class="leo-qty badge pull-right"></span>
	</a>
			<ul>
												
<li >
	<a href="http://localhost/tienda3/4-tops" title="Tops">
		Tops
		<span id="leo-cat-4" style="display:none" class="leo-qty badge pull-right"></span>
	</a>
			<ul>
												
<li >
	<a href="http://localhost/tienda3/5-camisetas" title="Camisetas">
		Camisetas
		<span id="leo-cat-5" style="display:none" class="leo-qty badge pull-right"></span>
	</a>
	</li>

																
<li class="last">
	<a href="http://localhost/tienda3/7-blusas" title="Blusas">
		Blusas
		<span id="leo-cat-7" style="display:none" class="leo-qty badge pull-right"></span>
	</a>
	</li>

									</ul>
	</li>

																
<li class="last">
	<a href="http://localhost/tienda3/8-vestidos" title="Vestidos">
		Vestidos
		<span id="leo-cat-8" style="display:none" class="leo-qty badge pull-right"></span>
	</a>
			<ul>
												
<li >
	<a href="http://localhost/tienda3/9-vestidos-informales" title="Vestidos informales">
		Vestidos informales
		<span id="leo-cat-9" style="display:none" class="leo-qty badge pull-right"></span>
	</a>
	</li>

																
<li >
	<a href="http://localhost/tienda3/10-vestidos-noche" title="Vestidos de noche">
		Vestidos de noche
		<span id="leo-cat-10" style="display:none" class="leo-qty badge pull-right"></span>
	</a>
	</li>

																
<li class="last">
	<a href="http://localhost/tienda3/11-vestidos-verano" title="Vestidos de verano">
		Vestidos de verano
		<span id="leo-cat-11" style="display:none" class="leo-qty badge pull-right"></span>
	</a>
	</li>

									</ul>
	</li>

									</ul>
	</li>

									</ul>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>
