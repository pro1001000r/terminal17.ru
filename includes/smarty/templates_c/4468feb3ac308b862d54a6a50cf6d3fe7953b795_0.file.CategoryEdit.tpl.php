<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-15 11:54:28
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Category/view/CategoryEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62a99e449d5401_64428524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4468feb3ac308b862d54a6a50cf6d3fe7953b795' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Category/view/CategoryEdit.tpl',
      1 => 1655180255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a99e449d5401_64428524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/CREDPanel/function.CREDPanel.php','function'=>'smarty_function_CREDPanel',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/SelectTree/function.selecttree.php','function'=>'smarty_function_selecttree',),4=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Select/function.select.php','function'=>'smarty_function_select',),5=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/FotoViewCarousel/function.fotoViewCarousel.php','function'=>'smarty_function_fotoViewCarousel',),6=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>


<div class="container-fluid">
    <div class = "row vit-background-opacity">
        <div class = "col">
        <form id="main" action="#" method="post" enctype="multipart/form-data">
                <div class="form-group form-inline">
                    <?php echo smarty_function_CREDPanel(array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']['value']),$_smarty_tpl);?>

                </div>
                <?php $_smarty_tpl->_assignInScope('comment', '');?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <div class = "form-group row form-inline">
                        <label for="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="col-sm-2"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
: </label>
                        <?php if ($_smarty_tpl->tpl_vars['key']->value == 'id') {?>
                            <input type="text" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="col-sm-10 form-control" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
" readonly>
                        <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['type'] == 'v256') {?>
                            <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"  class="col-sm-10 form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
">
                        <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['type'] == 't') {?>
 
                            <?php $_smarty_tpl->_assignInScope('comment', $_smarty_tpl->tpl_vars['value']->value['value']);?>
                            <textarea name="comment" class="col-sm-10 form-control" placeholder="Описание"><?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</textarea>

                        <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['type'] == 'd') {?>
                            <input type="datetime-local" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="col-sm-10 form-control" placeholder="Дата" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
">
                        <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['type'] == 'd152') {?>
                             <input type="number" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="col-sm-10 form-control" value=<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
 data-decimals="2" step="0.1">
                        <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'parent_id') {?>
                            <?php $_smarty_tpl->_assignInScope('table', $_smarty_tpl->tpl_vars['value']->value['table']);?>
                            <?php echo smarty_function_selecttree(array('table'=>'category','value'=>$_smarty_tpl->tpl_vars['value']->value['value'],'id'=>'id'),$_smarty_tpl);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['type'] == 'sid') {?>
                            <?php $_smarty_tpl->_assignInScope('table', $_smarty_tpl->tpl_vars['value']->value['table']);?>
                            <?php echo smarty_function_select(array('table'=>$_smarty_tpl->tpl_vars['value']->value['table'],'value'=>$_smarty_tpl->tpl_vars['value']->value['value'],'id'=>'id'),$_smarty_tpl);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['type'] == 'f') {?>
                            <?php echo smarty_function_fotoViewCarousel(array('table'=>$_smarty_tpl->tpl_vars['tableName']->value,'id'=>$_smarty_tpl->tpl_vars['item']->value['id']['value'],'edit'=>true),$_smarty_tpl);?>

                        <?php }?>
                     </div>
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
