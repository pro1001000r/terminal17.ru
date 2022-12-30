<?php
/* Smarty version 3.1.34-dev-7, created on 2022-07-15 09:16:41
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Category/view/CategoryList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62d106493ce717_26991757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c808258b36b91f124147e2a31fdcea774be602c7' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Category/view/CategoryList.tpl',
      1 => 1655567207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d106493ce717_26991757 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/CatTree/function.cattree.php','function'=>'smarty_function_cattree',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/template/plugins/function.fotoPath.php','function'=>'smarty_function_fotoPath',),4=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/template/plugins/function.getname.php','function'=>'smarty_function_getname',),5=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class='text-center'>Категории:</h2>
                        <a class="btn btn-default" href="/Category/Edit/">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
                        <br>
        </div>
    </div>
    <?php echo smarty_function_cattree(array(),$_smarty_tpl);?>

    <div class="row">
        <div class="col">
            <table class="table table-striped table-condensed">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Наименование</th>
                        <th scope="col">Фото</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Родитель</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                        <tr>
                            <td>
                                <a href="/Category/Edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style='color: #000'>
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>

                                </a>
                            </td>
                            <td>
                                <a href="/Category/View/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style='color: #000'>
                                    <b><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</b>
                                </a>
                            </td>
                            <td>
                                <a href="/Category/View/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style='color: #000'>
                                    <img src="<?php echo smarty_function_fotoPath(array('foto'=>$_smarty_tpl->tpl_vars['item']->value['foto']),$_smarty_tpl);?>
" class="img-responsive" width="60" height="50">
                                                                    </a>
                            </td>
                            <td>
                                <a href="/Category/View/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style='color: #000'>
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>

                                </a>
                            </td>
                            <td>
                                <a href="/Category/View/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style='color: #000'>
                                    <?php echo smarty_function_getname(array('table'=>'category','id'=>$_smarty_tpl->tpl_vars['item']->value['parent_id']),$_smarty_tpl);?>

                                </a>
                            </td>

                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
