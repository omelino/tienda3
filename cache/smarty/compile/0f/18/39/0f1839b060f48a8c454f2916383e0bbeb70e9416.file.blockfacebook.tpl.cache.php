<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 13:51:50
         compiled from "C:\xampp\htdocs\tienda3\themes\nuevo1\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:697357ab77c6c25c31-43647238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f1839b060f48a8c454f2916383e0bbeb70e9416' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda3\\themes\\nuevo1\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1470855043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '697357ab77c6c25c31-43647238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab77c6c394b8_61193474',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab77c6c394b8_61193474')) {function content_57ab77c6c394b8_61193474($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="block">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
