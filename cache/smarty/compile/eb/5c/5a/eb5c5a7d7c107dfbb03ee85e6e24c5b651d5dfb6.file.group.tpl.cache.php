<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 13:51:43
         compiled from "C:\xampp\htdocs\tienda3\modules\leomanagewidgets\views\widgets\group.tpl" */ ?>
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
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'leoGroup' => 0,
    'group' => 0,
    'LEO_BG_STYLE_DATA' => 0,
    'column' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab77bfba7300_53947045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab77bfba7300_53947045')) {function content_57ab77bfba7300_53947045($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['leoGroup']->value)&&$_smarty_tpl->tpl_vars['leoGroup']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leoGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
        <div class="<?php if (isset($_smarty_tpl->tpl_vars['group']->value['class'])&&$_smarty_tpl->tpl_vars['group']->value['class']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" 
            <?php if (isset($_smarty_tpl->tpl_vars['LEO_BG_STYLE_DATA']->value[$_smarty_tpl->tpl_vars['group']->value['id']]['background_image_html'])&&$_smarty_tpl->tpl_vars['LEO_BG_STYLE_DATA']->value[$_smarty_tpl->tpl_vars['group']->value['id']]['background_image_html']!='') {?>
                <?php echo $_smarty_tpl->tpl_vars['LEO_BG_STYLE_DATA']->value[$_smarty_tpl->tpl_vars['group']->value['id']]['background_image_html'];?>

            <?php }?>
        >
            <?php if (isset($_smarty_tpl->tpl_vars['LEO_BG_STYLE_DATA']->value[$_smarty_tpl->tpl_vars['group']->value['id']]['background_video_html'])&&$_smarty_tpl->tpl_vars['LEO_BG_STYLE_DATA']->value[$_smarty_tpl->tpl_vars['group']->value['id']]['background_video_html']!='') {?>
                <?php echo $_smarty_tpl->tpl_vars['LEO_BG_STYLE_DATA']->value[$_smarty_tpl->tpl_vars['group']->value['id']]['background_video_html'];?>

            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['group']->value['title'])&&$_smarty_tpl->tpl_vars['group']->value['title']) {?>
                <h4 class="title_block"><?php echo $_smarty_tpl->tpl_vars['group']->value['title'];?>
</h4>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['group']->value['columns'])&&$_smarty_tpl->tpl_vars['group']->value['columns']) {?>
                <?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['column']->value['active']) {?>
                        <div class="widget<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['column']->value['col_value'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_smarty_tpl->tpl_vars['column']->value['class'])&&$_smarty_tpl->tpl_vars['column']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['column']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                            <?php if (isset($_smarty_tpl->tpl_vars['column']->value['background'])&&$_smarty_tpl->tpl_vars['column']->value['background']) {?>style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['column']->value['background'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
                            <?php if (isset($_smarty_tpl->tpl_vars['column']->value['rows'])) {?>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['column']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['row']->value['content'])) {?><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
<?php }?>
                                <?php } ?>
                            <?php }?>
                        </div>
                    <?php }?>
                <?php } ?>
            <?php }?>
        </div>
    <?php } ?>
<?php }?><?php }} ?>
