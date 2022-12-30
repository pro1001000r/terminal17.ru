<?php
/* Smarty version 3.1.34-dev-7, created on 2022-07-31 09:14:54
  from '/var/www/u1663726/data/www/vjone.ru/vAtoms/Select/Select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62e61dde5b2a68_08376078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c1892700eafad4da7cf791243572f8bb965275c' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vAtoms/Select/Select.tpl',
      1 => 1658373580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e61dde5b2a68_08376078 (Smarty_Internal_Template $_smarty_tpl) {
?><select class="form-control form-control-sm" name="<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
" onchange="<?php echo $_smarty_tpl->tpl_vars['valstr']->value;?>
">
    <option value=0></option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selectlist']->value, 'item1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item1']->value) {
?>
        <option value=<?php echo $_smarty_tpl->tpl_vars['item1']->value['id'];?>
 <?php if (($_smarty_tpl->tpl_vars['item1']->value['id'] == $_smarty_tpl->tpl_vars['selectid']->value)) {?> selected<?php }?>>
            <?php echo $_smarty_tpl->tpl_vars['item1']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['item1']->value['id'];?>
)
        </option>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select><?php }
}
