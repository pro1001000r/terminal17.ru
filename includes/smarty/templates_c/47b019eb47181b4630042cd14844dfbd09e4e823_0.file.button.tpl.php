<?php
/* Smarty version 3.1.34-dev-7, created on 2022-11-24 05:27:59
  from '/var/www/u1845303/data/www/terminal17.ru/vAtoms/Button/button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_637ed6afbfdda2_37936940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47b019eb47181b4630042cd14844dfbd09e4e823' => 
    array (
      0 => '/var/www/u1845303/data/www/terminal17.ru/vAtoms/Button/button.tpl',
      1 => 1655618280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637ed6afbfdda2_37936940 (Smarty_Internal_Template $_smarty_tpl) {
if (($_smarty_tpl->tpl_vars['mode']->value == "onclick")) {?>
    <button type="button" class="btn vit-color-0 <?php echo $_smarty_tpl->tpl_vars['classbtn']->value;?>
" onclick="<?php echo $_smarty_tpl->tpl_vars['onclick']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['freeParam']->value;?>
>
        <span class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['comment']->value <> '') {?>data-toggle="popover" data-trigger="hover focus" data-container="body"
            data-placement="bottom" data-content="<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
" <?php }?>>
        </span>
        <?php if ($_smarty_tpl->tpl_vars['name']->value <> '') {?>
            <br>
            <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

        <?php }?>
    </button>
<?php } elseif (($_smarty_tpl->tpl_vars['mode']->value == "submit")) {?>
    <button name="submit" type="submit" class="btn vit-color-0 <?php echo $_smarty_tpl->tpl_vars['classbtn']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['freeParam']->value;?>
>
        <span class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['comment']->value <> '') {?> data-toggle="popover" data-trigger="hover focus" data-container="body"
            data-placement="bottom" data-content="<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
" <?php }?>>
        </span>
        <?php if ($_smarty_tpl->tpl_vars['name']->value <> '') {?>
            <br>
            <small><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</small>
        <?php }?>
    </button>

    <?php } elseif (($_smarty_tpl->tpl_vars['mode']->value == "href")) {?>     <a class="btn vit-color-0 <?php echo $_smarty_tpl->tpl_vars['classbtn']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['freeParam']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
">
        <span class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['comment']->value <> '') {?> data-toggle="popover" data-trigger="hover focus" data-container="body"
            data-placement="bottom" data-content="<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
" <?php }?>>
        </span>
        <?php if ($_smarty_tpl->tpl_vars['name']->value <> '') {?>
            <br>
            <small><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</small>
        <?php }?>
    </a>
<?php } elseif (($_smarty_tpl->tpl_vars['mode']->value == "new")) {?>     <a class="btn vit-color-0 <?php echo $_smarty_tpl->tpl_vars['classbtn']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['freeParam']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
">
        <span class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['comment']->value <> '') {?> data-toggle="popover" data-trigger="hover focus" data-container="body"
            data-placement="bottom" data-content="<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
" <?php }?>>
        </span><span class="bi bi-plus-circle-fill h6" style="position: absolute; margin-left: -5px; margin-top:-5px"></span>
        <?php if ($_smarty_tpl->tpl_vars['name']->value <> '') {?>
            <br>
            <small><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</small>
        <?php }?>
    </a>

<?php }
}
}
