<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-18 19:22:03
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Nomen/plugins/AjaxNomenList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62adc36bde2699_10509033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd02d98deefb7d0cdc8448a926aa8be06345b4b57' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Nomen/plugins/AjaxNomenList.tpl',
      1 => 1655377954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62adc36bde2699_10509033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vMVC/Nomen/plugins/function.pagenationNomen.php','function'=>'smarty_function_pagenationNomen',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Card/function.Card.php','function'=>'smarty_function_Card',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Pagenation/function.pagenation.php','function'=>'smarty_function_pagenation',),));
?>
<div class="col mx-2">   
    <?php echo smarty_function_pagenationNomen(array('vp'=>$_smarty_tpl->tpl_vars['vpage']->value),$_smarty_tpl);?>

    <?php $_smarty_tpl->_assignInScope('i', 3);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value == 3;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?><div class="row row-flex"><?php }?>

            <div class="col-md-4 my-2">
                <?php echo smarty_function_Card(array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>

            </div> 

            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value-1);?>  
            <?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?></div><?php $_smarty_tpl->_assignInScope('i', 3);
}?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
        <?php if ($_smarty_tpl->tpl_vars['i']->value <> 3) {?></div><?php }?>
    <br>
    <?php echo smarty_function_pagenation(array('vp'=>$_smarty_tpl->tpl_vars['vpage']->value),$_smarty_tpl);?>

</div>
<?php }
}
