<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-16 10:19:50
  from '/var/www/u1663726/data/www/vjone.ru/vAtoms/CREDFotoPanel/CREDFotoPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62aaa1566ad589_16312291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5db295cc51af1a107f6388be91f0197eb8dac5e' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vAtoms/CREDFotoPanel/CREDFotoPanel.tpl',
      1 => 1652936040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62aaa1566ad589_16312291 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="btn-group" role="group" aria-label="Basic example">
        
        <button type="button" name="submitNewFoto<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-light" onclick="document.getElementById('submitFoto').click();">
            <span class="glyphicon glyphicon-plus"></span>
        </button> 

        <button type="submit" name="submitEditFoto<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-light" onclick="vEditFoto('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')" hidden="true">
            <span class="glyphicon glyphicon-pencil"></span><?php echo $_smarty_tpl->tpl_vars['id']->value;?>

        </button>
        
        <button type="submit" name="submitRotateRightFoto<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-light" onclick="vRotateRightFoto('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')">
            <span class="bi bi-arrow-clockwise"></span>
        </button>
        
        <button type="submit" name="submitMainFoto<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-light" onclick="vMainFoto('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')">
            <span class="bi bi-file-image-fill"></span>
        </button>
        
        <button type="submit" name="submitRotateLeftFoto<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-light" onclick="vRotateLeftFoto('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')">
            <span class="bi bi-arrow-counterclockwise"></span>
        </button>
        
        <button type="submit" name="submitDeleteFoto<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-light" onClick="vDeleteFoto('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')">
            <span class="glyphicon glyphicon-remove"></span>
        </button>

</div><?php }
}
