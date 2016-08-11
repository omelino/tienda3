<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 13:51:43
         compiled from "C:\xampp\htdocs\tienda3\themes\nuevo1\modules\leomanagewidgets\views\widgets\widget_customercarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2678757ab77bfe5e8b4-25697717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26c3321761d9fae5c32e3dfb3d34161cbbed35ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda3\\themes\\nuevo1\\modules\\leomanagewidgets\\views\\widgets\\widget_customercarousel.tpl',
      1 => 1470855044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2678757ab77bfe5e8b4-25697717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'widget_heading' => 0,
    'show_controls' => 0,
    'customercarousel' => 0,
    'startSlide' => 0,
    'item' => 0,
    'interval' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab77bfe81b35_42346451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab77bfe81b35_42346451')) {function content_57ab77bfe81b35_42346451($_smarty_tpl) {?><div id="custhtmlcarosel<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="block carousel custhtmlcarosel slide carousel-fade">
    <?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
    <h4 class="page-subheading">
        <?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

    </h4>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['show_controls']->value&&count($_smarty_tpl->tpl_vars['customercarousel']->value)>1) {?>
	<a class="carousel-control left" href="#custhtmlcarosel<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"   data-slide="prev"></a>
	<a class="carousel-control right" href="#custhtmlcarosel<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"  data-slide="next"></a>
    <?php }?>
    <div class="carousel-inner">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customercarousel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["mypLoop"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["mypLoop"]['index']++;
?>
        <div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['mypLoop']['index']==$_smarty_tpl->tpl_vars['startSlide']->value) {?>active<?php }?>">
            <h4 class="title-custhtml"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h4>
            <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
           
        </div>

    <?php } ?>   
    </div>
</div>
<script type="text/javascript">

$(document).ready(function() {
    $('#custhtmlcarosel<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').each(function(){
        $(this).carousel({
            pause: true,
            interval: <?php echo $_smarty_tpl->tpl_vars['interval']->value;?>

        });
    });
     
});


</script><?php }} ?>
