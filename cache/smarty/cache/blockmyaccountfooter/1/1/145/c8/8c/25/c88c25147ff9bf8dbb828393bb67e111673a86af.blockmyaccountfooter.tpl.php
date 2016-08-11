<?php /*%%SmartyHeaderCode:1768857ab77c80f6c37-28166716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c88c25147ff9bf8dbb828393bb67e111673a86af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda3\\themes\\nuevo1\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1470855043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1768857ab77c80f6c37-28166716',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab77c817b958_40250938',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab77c817b958_40250938')) {function content_57ab77c817b958_40250938($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block block">
	<h4 class="title_block">Mi cuenta</h4>
	<div class="block_content toggle-footer">
		<ul class="bullet toggle-footer list-group">
			<li><a href="http://localhost/tienda3/historial-compra" title="Mis compras" rel="nofollow">Mis compras</a></li>
						<li><a href="http://localhost/tienda3/albaran" title="Mis vales descuento" rel="nofollow">Mis vales descuento</a></li>
			<li><a href="http://localhost/tienda3/direcciones" title="Mis direcciones" rel="nofollow">Mis direcciones</a></li>
			<li><a href="http://localhost/tienda3/datos-personales" title="Administrar mi información personal" rel="nofollow">Mis datos personales</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
