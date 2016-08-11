<?php /*%%SmartyHeaderCode:1653157ab77c3074bb9-96058596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcaee6afab17f0db4b62679dc57e0b05e4a2443a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda3\\themes\\nuevo1\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1470855044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1653157ab77c3074bb9-96058596',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab77c30f98d8_33260175',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab77c30f98d8_33260175')) {function content_57ab77c30f98d8_33260175($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<h4 class="title_block">
					<a href="http://localhost/tienda3/proveedor" title="Proveedores">
					Proveedores
					</a>
			</h4>
	<div class="block_content">
								<ul class="list-block list-group bullet">
											<li class="last_item">
                					<a 
					href="http://localhost/tienda3/1__fashion-supplier" 
					title="Más sobre Fashion Supplier">
				                Fashion Supplier
                					</a>
                				</li>
										</ul>
										<form action="/tienda3/index.php" method="get">
					
						<select class="form-control" name="supplier_list">
							<option value="0">Todos los proveedores</option>
													<option value="http://localhost/tienda3/1__fashion-supplier">Fashion Supplier</option>
												</select>
					
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
