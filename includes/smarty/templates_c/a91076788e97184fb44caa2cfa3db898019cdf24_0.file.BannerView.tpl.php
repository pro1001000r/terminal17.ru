<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-29 20:06:03
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Banner/view/BannerView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62bc867b23fa20_78825299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a91076788e97184fb44caa2cfa3db898019cdf24' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Banner/view/BannerView.tpl',
      1 => 1655719549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bc867b23fa20_78825299 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Foto/function.fotoView.php','function'=>'smarty_function_fotoView',),4=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/FotoViewCarousel/function.fotoViewCarousel.php','function'=>'smarty_function_fotoViewCarousel',),5=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/template/plugins/function.getname.php','function'=>'smarty_function_getname',),6=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

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
                    <?php echo smarty_function_fotoView(array('foto'=>$_smarty_tpl->tpl_vars['key']->value['value']),$_smarty_tpl);?>

                    <div class='row'> 
                        <div class='col-lg-6 offset-lg-3'>  
                        <?php echo smarty_function_fotoViewCarousel(array('table'=>'banner','id'=>$_smarty_tpl->tpl_vars['fields']->value['id']['value']),$_smarty_tpl);?>

                        </div>  
                    </div>
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
        </div>
    </div>
</div>     
<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
