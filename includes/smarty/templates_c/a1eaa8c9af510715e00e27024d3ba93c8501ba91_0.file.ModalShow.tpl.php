<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-19 15:16:55
  from '/var/www/u1663726/data/www/vjone.ru/vAtoms/Modal/ModalShow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62af13b7297247_99918076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1eaa8c9af510715e00e27024d3ba93c8501ba91' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vAtoms/Modal/ModalShow.tpl',
      1 => 1655641008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62af13b7297247_99918076 (Smarty_Internal_Template $_smarty_tpl) {
?><button type="button" class="btn vit-color-0 <?php echo $_smarty_tpl->tpl_vars['classbtn']->value;?>
" data-toggle="modal" data-target="#<?php echo $_smarty_tpl->tpl_vars['idModal']->value;?>
">
    <span class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['comment']->value <> '') {?>data-toggle="popover" data-trigger="hover focus" data-container="body"
        data-placement="bottom" data-content="<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
" <?php }?>>
    </span>
    <?php if ($_smarty_tpl->tpl_vars['name']->value <> '') {?>
        <small>
            <br>
            <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

        </small>
    <?php }?>
</button>

<div class="modal fade" id="<?php echo $_smarty_tpl->tpl_vars['idModal']->value;?>
" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered <?php echo $_smarty_tpl->tpl_vars['scroll']->value;?>
">
        <div class="modal-content">
            <div class="modal-header vit-color-0">
                <small>
                    <i class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
                    </i>
                </small>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
<?php }
}
