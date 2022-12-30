<?php
/* Smarty version 3.1.34-dev-7, created on 2022-07-07 15:04:25
  from '/var/www/u1663726/data/www/vjone.ru/template/layouts/vView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62c6cbc984b229_57262861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b541e1cd5c26705d7d7e53a016087f83f502a61' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/template/layouts/vView.tpl',
      1 => 1657195461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c6cbc984b229_57262861 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/FotoViewCarousel/function.fotoViewCarousel.php','function'=>'smarty_function_fotoViewCarousel',),4=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/template/plugins/function.getname.php','function'=>'smarty_function_getname',),5=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
?>

<?php echo smarty_function_header(array('title'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>


<div class="container-fluid">
    <div class = "row vit-background-opacity">
        <div class = "col">

            <?php echo smarty_function_button(array('name'=>'','href'=>'javascript: history.back()','icon'=>'bi-reply-fill'),$_smarty_tpl);?>


            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value['type'] == 'f') {?>
                    <?php echo smarty_function_fotoViewCarousel(array('table'=>'nomen','id'=>$_smarty_tpl->tpl_vars['fields']->value['id']['value']),$_smarty_tpl);?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value['type'] == 'sid') {?>
                    <p><?php echo $_smarty_tpl->tpl_vars['key']->value['name'];?>
: <?php echo smarty_function_getname(array('table'=>$_smarty_tpl->tpl_vars['key']->value['table'],'id'=>$_smarty_tpl->tpl_vars['key']->value['value']),$_smarty_tpl);?>
</p>
                <?php } else { ?>
                    <p><?php echo $_smarty_tpl->tpl_vars['key']->value['name'];?>
: <?php echo $_smarty_tpl->tpl_vars['key']->value['value'];?>
</p>
                    <br>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            </form> 
        </div>
    </div>
</div> 

<?php echo '<script'; ?>
 src="/components/bootstrap/js/jquery-3.4.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/template/js/VitCRED.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
