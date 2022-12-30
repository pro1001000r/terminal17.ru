<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-20 17:59:54
  from '/var/www/u1663726/data/www/vjone.ru/template/layouts/vList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62b08b6a198900_57773444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e3f940cd66b38f5e8cc392ea254a9a4d1a6d8ae' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/template/layouts/vList.tpl',
      1 => 1655719398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b08b6a198900_57773444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/template/plugins/function.getname.php','function'=>'smarty_function_getname',),4=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>

<div class = "row">       
    <div class = "col">
                <?php if ((!$_smarty_tpl->tpl_vars['userIsGuest']->value)) {?>
        <?php echo smarty_function_button(array('href'=>"/".((string)$_smarty_tpl->tpl_vars['tableNameUp']->value)."/Edit/",'icon'=>'bi-plus-circle-fill'),$_smarty_tpl);?>

        <?php }?>
        <br>
    </div> 
</div>
<div class = "row">
    <div class = "col">
        <table class="table table-striped table-condensed">
            <thead>
                <tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?> 
                        <th scope="col"><?php echo $_smarty_tpl->tpl_vars['key']->value['name'];?>
</th>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?> 
                    <tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?> 
                            <td> 
                                <?php if ($_smarty_tpl->tpl_vars['key']->value['type'] == 'f') {?>
                                    <a  href="/<?php echo $_smarty_tpl->tpl_vars['tableNameUp']->value;?>
/View/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style = 'color: #000'>
                                        <img src=" <?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['key']->value['name']];?>
" class="img-fluid rounded" style ="max-width: 100px">
                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['key']->value['name'] == 'id') {?>
                                    <a  href="/<?php echo $_smarty_tpl->tpl_vars['tableNameUp']->value;?>
/Edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style = 'color: #000'>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['key']->value['name']];?>

                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['key']->value['type'] == 'sid') {?>
                                    <a  href="/<?php echo $_smarty_tpl->tpl_vars['tableNameUp']->value;?>
/Edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style = 'color: #000'>
                                        <?php echo smarty_function_getname(array('table'=>$_smarty_tpl->tpl_vars['key']->value['table'],'id'=>$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['key']->value['name']]),$_smarty_tpl);?>
  
                                    </a>
                                <?php } else { ?>
                                    <a  href="/<?php echo $_smarty_tpl->tpl_vars['tableNameUp']->value;?>
/View/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style = 'color: #000'>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['key']->value['name']];?>

                                    </a>
                                <?php }?>
                            </td>                  
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div> 
</div>

<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
