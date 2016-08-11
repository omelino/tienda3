<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 13:51:51
         compiled from "C:\xampp\htdocs\tienda3\themes\nuevo1\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2198357ab77c7576f36-40460766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f2a3b3628abc7e24ca0e9f857246acb1856b3fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda3\\themes\\nuevo1\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1470855044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2198357ab77c7576f36-40460766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab77c7586938_43225646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab77c7586938_43225646')) {function content_57ab77c7586938_43225646($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
