<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-19 13:20:29
  from '/var/www/u1663726/data/www/vjone.ru/vAtoms/ModalShow/ModalShow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62aef86d950794_29124551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5889d3e11658eed06780f4e798c5fc179704ed7' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vAtoms/ModalShow/ModalShow.tpl',
      1 => 1655633941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62aef86d950794_29124551 (Smarty_Internal_Template $_smarty_tpl) {
?><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $_smarty_tpl->tpl_vars['idModal']->value;?>
">
    <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

</button>

<div class="modal fade" id="<?php echo $_smarty_tpl->tpl_vars['idModal']->value;?>
" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div><?php }
}
