<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-15 11:54:28
  from '/var/www/u1663726/data/www/vjone.ru/vAtoms/CREDPanel/CREDPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62a99e449e4789_00854467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32baa90622c57b67c052357185819187e6e9758e' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vAtoms/CREDPanel/CREDPanel.tpl',
      1 => 1652767029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a99e449e4789_00854467 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="btn-group" role="group" aria-label="Basic example">

    <a type="button" href = "javascript:history.back()" class="btn vit-color-0 vit-outline-0">
        <span class="bi bi-reply-fill"></span>
    </a>
    <input type="text" name="tableName" id="tableName" value="<?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
" hidden="true">

    <a type="button" href="/<?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
/List/" class="btn vit-color-0 vit-outline-0">
        <span class="glyphicon glyphicon-th-list"></span>
    </a>
    <?php if (($_smarty_tpl->tpl_vars['id']->value == 0)) {?>
        <button type="submit" name="submitNew" class="btn vit-color-0 vit-outline-0" onclick="vNew()">
            <span class="glyphicon glyphicon-floppy-disk"></span>
        </button>
    <?php } else { ?>
        <button type="submit" name="submitEdit" class="btn vit-color-0 vit-outline-0" onclick="vEdit()">
            <span class="glyphicon glyphicon-floppy-disk"></span>
        </button>
        <button type="submit" name="submitDelete" class="btn vit-color-0 vit-outline-0" onclick="vDelete()">
            <span class="glyphicon glyphicon-remove"></span>
        </button>
    <?php }?>
</div><?php }
}
