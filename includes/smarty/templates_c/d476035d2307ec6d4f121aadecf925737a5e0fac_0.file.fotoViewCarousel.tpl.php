<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-16 10:19:50
  from '/var/www/u1663726/data/www/vjone.ru/vAtoms/FotoViewCarousel/fotoViewCarousel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62aaa1566a4941_53705803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd476035d2307ec6d4f121aadecf925737a5e0fac' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vAtoms/FotoViewCarousel/fotoViewCarousel.tpl',
      1 => 1655109988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62aaa1566a4941_53705803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/CREDFotoPanel/function.CREDFotoPanel.php','function'=>'smarty_function_CREDFotoPanel',),));
?>
<div id="carouselVit" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php $_smarty_tpl->_assignInScope('i', 0);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listFoto']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <li data-target="#carouselVit" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>class="active"<?php }?>></li>
                <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>    
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
    </ol>
    <div class="carousel-inner">
        <?php $_smarty_tpl->_assignInScope('i', 0);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listFoto']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
                <div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>active<?php }?>">
                    <div class="text-center">
                        <?php echo smarty_function_CREDFotoPanel(array('table'=>$_smarty_tpl->tpl_vars['tablename']->value,'id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>

                    </div>
                    <br>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['foto64'];?>
">
                        <img class="d-block w-100" src=<?php echo $_smarty_tpl->tpl_vars['item']->value['foto'];?>
 alt=<?php echo $_smarty_tpl->tpl_vars['item']->value['foto'];?>
>
                    </a>
                                    </div>
            <?php } else { ?> 
                <div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>active<?php }?>">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['foto64'];?>
">
                        <img class="d-block w-100" src=<?php echo $_smarty_tpl->tpl_vars['item']->value['foto'];?>
 alt=<?php echo $_smarty_tpl->tpl_vars['item']->value['foto'];?>
>
                    </a>
                </div>
            <?php }?>

            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <a class="carousel-control-prev" href="#carouselVit" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselVit" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>

<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
    <input id="submitFoto" type="file" accept="image/*" name="file[]" multiple hidden="true">
    <input id="tablename" type="text" name="tablename" value="<?php echo $_smarty_tpl->tpl_vars['tablename']->value;?>
" hidden="true">
    <input id="tableid" type="text" name="tableid" value="<?php echo $_smarty_tpl->tpl_vars['tableid']->value;?>
" hidden="true">
<?php }?>

<?php }
}
