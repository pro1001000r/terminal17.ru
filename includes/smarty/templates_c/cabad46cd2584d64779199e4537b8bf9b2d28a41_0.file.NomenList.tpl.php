<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-20 18:00:03
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Nomen/view/NomenList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62b08b7363d774_18169489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cabad46cd2584d64779199e4537b8bf9b2d28a41' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Nomen/view/NomenList.tpl',
      1 => 1655719730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b08b7363d774_18169489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/CatTree/function.cattree.php','function'=>'smarty_function_cattree',),4=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vMVC/Nomen/plugins/function.pagenationNomen.php','function'=>'smarty_function_pagenationNomen',),5=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Card/function.Card.php','function'=>'smarty_function_Card',),6=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Pagenation/function.pagenation.php','function'=>'smarty_function_pagenation',),7=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>


<?php echo '<script'; ?>
 src="/vMVC/Nomen/js/vNomen.js" type="text/javascript"><?php echo '</script'; ?>
>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 id="categoryName" class='text-center'>Каталог товаров</h2>
            <?php if ((!$_smarty_tpl->tpl_vars['userIsGuest']->value)) {?>
                <br>
                <div class="col">
                    <?php echo smarty_function_button(array('name'=>'Добавить номенклатуру','href'=>"/Nomen/Edit/",'icon'=>'bi-plus-circle-fill'),$_smarty_tpl);?>

                </div>
            <?php }?>
            <br>
            <button type="button" class="btn btn-primary ml-2" id="buttoncategory" data-toggle="collapse"
                data-target="#Vit-cattree-collapse" aria-expanded="false">
                <i class="bi bi-grid-3x2-gap-fill"></i>
                <b class="pb-3"></b> <i class="bi bi-chevron-down"></i>
            </button>

            <input type="text" id="cattreeid" name="cattreeid" value="" hidden="true">

            <div class="collapse" id="Vit-cattree-collapse" style="z-index: 100;">
                <?php echo smarty_function_cattree(array(),$_smarty_tpl);?>

                <br>
            </div>
        </div>
    </div>

    <div class="row" id="AjaxNomenList">
        <div class="col">

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
                    <?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
                </div><?php $_smarty_tpl->_assignInScope('i', 3);
}?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['i']->value <> 3) {?></div><?php }?>
        <br>

        <?php echo smarty_function_pagenation(array('vp'=>$_smarty_tpl->tpl_vars['vpage']->value),$_smarty_tpl);?>


    </div>
</div>
</div>

<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
