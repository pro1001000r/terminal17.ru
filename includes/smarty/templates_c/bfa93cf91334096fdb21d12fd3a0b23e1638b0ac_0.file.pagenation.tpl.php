<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-15 15:55:15
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Nomen/plugins/pagenation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62a99e73a84f95_41853418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfa93cf91334096fdb21d12fd3a0b23e1638b0ac' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Nomen/plugins/pagenation.tpl',
      1 => 1653043358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a99e73a84f95_41853418 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav aria-label="Пагинация">

    <ul class="pagination justify-content-center vit-color-0">
        <?php if (($_smarty_tpl->tpl_vars['page']->value > 2)) {?>
            <li class="page-item">
                <button type="submit" class="page-link vit-color-0" onclick="vPagenation('1')">
                    <i class="bi bi-skip-backward-fill"></i>
                </button>
            </li>
            <li class="page-item"><a class="page-link vit-color-0 disabled">...</a></li>
            <?php }?>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['total_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                <?php if ($_smarty_tpl->tpl_vars['i']->value >= ($_smarty_tpl->tpl_vars['page']->value-1) && $_smarty_tpl->tpl_vars['i']->value <= ($_smarty_tpl->tpl_vars['page']->value+2)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['page']->value) {?>
                    <li class="page-item"><a class="page-link vit-color-0 disabled"><b><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</b></a></li>
                            <?php } else { ?>
                    <li class="page-item">
                        <button type="submit" class="page-link vit-color-0" onclick="vPagenation('<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
')">
                            <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

                        </button>
                    </li>
                <?php }?>
            <?php }?>
        <?php }
}
?>

        <?php if ($_smarty_tpl->tpl_vars['page']->value < ($_smarty_tpl->tpl_vars['total_pages']->value-2)) {?> 
            <li class="page-item"><a class="page-link vit-color-0 disabled">...</a></li> 
            <li class="page-item">
                <button type="submit" class="page-link vit-color-0" onclick="vPagenation('<?php echo $_smarty_tpl->tpl_vars['total_pages']->value;?>
')">
                     <i class="bi bi-skip-forward-fill"></i>
                </button>
            </li> 
        <?php }?>
    </ul>

</nav><?php }
}
