<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 13:51:54
         compiled from "C:\xampp\htdocs\tienda3\modules\leocustomajax\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1896157ab77caed3107-57953818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '079d96be7967e0b7f6aa9e4da09c41fcc18bc745' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda3\\modules\\leocustomajax\\product.tpl',
      1 => 1470854972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1896157ab77caed3107-57953818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'images' => 0,
    'image' => 0,
    'imageIds' => 0,
    'link' => 0,
    'mediumSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab77cb08c601_19552531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab77cb08c601_19552531')) {function content_57ab77cb08c601_19552531($_smarty_tpl) {?>

<div class="col-1">
	<?php $_smarty_tpl->tpl_vars['images'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['images'], null, 0);?>
	<?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)>0) {?>
		<!-- thumbnails -->
		<div class="views_block" class="clearfix <?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)<2) {?>hidden<?php }?>">
		<?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)>3) {?><span class="view_scroll_spacer">
		<a class="view_scroll_left view_scroll_left_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" class="hidden" title="<?php echo smartyTranslate(array('s'=>'Other views','mod'=>'leocustomajax'),$_smarty_tpl);?>
" href="javascript:{}"><em class="fa fa-chevron-up"></em></a></span><?php }?>
		<div class="thumbs_list thumbs_list_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
">
			<ul class="thumbs_list_frame">
				<?php if (isset($_smarty_tpl->tpl_vars['images']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->index++;
 $_smarty_tpl->tpl_vars['image']->first = $_smarty_tpl->tpl_vars['image']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['thumbnails']['first'] = $_smarty_tpl->tpl_vars['image']->first;
?>
						<?php $_smarty_tpl->tpl_vars['imageIds'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value['id_product'])."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']), null, 0);?>
						<li id="thumbnail_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
">
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default'), ENT_QUOTES, 'UTF-8', true);?>
" data-idproduct="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" rel="other-views" class="thickbox-ajax-<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['thumbnails']['first']) {?> shown<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend']);?>
">
								<img id="thumb_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageIds']->value,'medium_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend']);?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageIds']->value,'home_default');?>
" class="leo-hover-image"/>
							</a>
						</li>
					<?php } ?>
				<?php }?>
			</ul>
		</div>
	<?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)>3) {?><a class="view_scroll_right view_scroll_right_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" title="<?php echo smartyTranslate(array('s'=>'Other views','mod'=>'leocustomajax'),$_smarty_tpl);?>
" href="javascript:{}"><em class="fa fa-chevron-down"></em></a><?php }?>
	</div>
	<?php }?>
</div><?php }} ?>
