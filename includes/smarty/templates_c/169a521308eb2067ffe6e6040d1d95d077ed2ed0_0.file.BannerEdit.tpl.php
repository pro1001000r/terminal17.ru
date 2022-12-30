<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-16 06:19:50
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Banner/view/BannerEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62aaa15663d161_63056093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '169a521308eb2067ffe6e6040d1d95d077ed2ed0' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Banner/view/BannerEdit.tpl',
      1 => 1653280037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62aaa15663d161_63056093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/CREDPanel/function.CREDPanel.php','function'=>'smarty_function_CREDPanel',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/FotoViewCarousel/function.fotoViewCarousel.php','function'=>'smarty_function_fotoViewCarousel',),4=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>


<div class="container-fluid">
    <div class = "row vit-background-opacity">
        <div class = "col-12">
            
            <form id ="main" action="#" method="post" enctype="multipart/form-data">
                <div class="form-group form-inline">
                    <?php echo smarty_function_CREDPanel(array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']['value']),$_smarty_tpl);?>

                </div>

                <div class = "form-group"> 
                    <label for="id" class="col-xs-2 col-form-label">id</label>
                    <input type="text" name="id" id="id" class="col-sm-10 form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id']['value'];?>
" readonly>
                </div>
                <div class = "form-group">
                    <label for="name" class="col-xs-2 col-form-label">name</label>
                    <input id="name" type="text" name="name" id="name" class="form-control" placeholder="https://...ru" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name']['value'];?>
">
                </div>
                <div class = "form-group">
                    <label for="foto" class="col-xs-2 col-form-label">Foto</label>
                    <input id="foto" type="text" name="foto" id="foto" class="form-control" placeholder="https://...ru" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['foto']['value'];?>
">
                </div>
                <div class="form-group">
                    <div class='row'> 
                        <div class='col-lg-6 offset-lg-3'>
                            <?php echo smarty_function_fotoViewCarousel(array('table'=>$_smarty_tpl->tpl_vars['tableName']->value,'id'=>$_smarty_tpl->tpl_vars['item']->value['id']['value'],'edit'=>true),$_smarty_tpl);?>

                        </div>
                    </div>
                </div>
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
