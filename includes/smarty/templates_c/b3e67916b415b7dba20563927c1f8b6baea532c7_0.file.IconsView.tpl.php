<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-20 12:56:02
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Icons/view/IconsView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62b04432470d10_55069718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3e67916b415b7dba20563927c1f8b6baea532c7' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Icons/view/IconsView.tpl',
      1 => 1655718959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b04432470d10_55069718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>


<div class="container-fluid">
    <div class="row">

        <div class="col">
            <div class="h2 text-center">
                icon
            </div>
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['icons']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <div class="  col-sm-6 col-lg-1 vit-color-0 vShadow text-center">
                        <small>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['namesmall'];?>

                        </small>
                        <br>
                        <button type="button" class="btn  vit-color-0">

                            <?php if ($_smarty_tpl->tpl_vars['item']->value['font'] == 'VitGlyphicon') {?>
                                <i class="glyphicon <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 h2">
                                </i>
                        
                            <?php } elseif (($_smarty_tpl->tpl_vars['item']->value['font'] == 'bootstrap-icons')) {?>
                                <i class="bi <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 h2">
                                </i>
                            <?php } else { ?>
                                <i class="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 h2">
                                </i>
                            <?php }?>

                        </button>
                        <br>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                                            </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>


</div>

<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
