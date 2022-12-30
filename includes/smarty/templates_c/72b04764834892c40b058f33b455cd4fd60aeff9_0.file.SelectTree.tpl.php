<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-15 15:54:28
  from '/var/www/u1663726/data/www/vjone.ru/vAtoms/SelectTree/SelectTree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62a99e44a07056_31226561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72b04764834892c40b058f33b455cd4fd60aeff9' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vAtoms/SelectTree/SelectTree.tpl',
      1 => 1652173300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a99e44a07056_31226561 (Smarty_Internal_Template $_smarty_tpl) {
?>
<select class="form-control form-control-sm" name="<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['table_id']->value;?>
">
    <option value=0>
        Без категории
    </option>
    <?php echo $_smarty_tpl->tpl_vars['selecttree']->value;?>

</select><?php }
}
