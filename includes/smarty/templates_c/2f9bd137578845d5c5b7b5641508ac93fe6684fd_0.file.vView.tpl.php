<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-21 19:30:47
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Clients/view/vView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62b1f237ca46c1_38384145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f9bd137578845d5c5b7b5641508ac93fe6684fd' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Clients/view/vView.tpl',
      1 => 1638589703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b1f237ca46c1_38384145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/template/plugins/function.fotoPath.php','function'=>'smarty_function_fotoPath',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/template/plugins/function.getname.php','function'=>'smarty_function_getname',),4=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vMVC/Clients/plugins/function.listtask.php','function'=>'smarty_function_listtask',),5=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>


<div class="container-fluid">
    <div class = "row vit-background-opacity">
        <div class = "col">
            
            <a class="btn btn-default" href="/<?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
/List/">
                <span class="glyphicon glyphicon-list"></span>
            </a>  
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value['type'] == 'f') {?>
                    <img src="<?php echo smarty_function_fotoPath(array('foto'=>$_smarty_tpl->tpl_vars['key']->value['value']),$_smarty_tpl);?>
" class="img-responsive img-thumbnail" style="width: 250px">
                <?php } elseif ($_smarty_tpl->tpl_vars['key']->value['type'] == 'sid') {?>
                    <p><?php echo $_smarty_tpl->tpl_vars['key']->value['name'];?>
: <?php echo smarty_function_getname(array('table'=>$_smarty_tpl->tpl_vars['key']->value['table'],'id'=>$_smarty_tpl->tpl_vars['key']->value['value']),$_smarty_tpl);?>
</p>
                <?php } else { ?>
                    <p><?php echo $_smarty_tpl->tpl_vars['key']->value['name'];?>
: <?php echo $_smarty_tpl->tpl_vars['key']->value['value'];?>
</p>
                    <br>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value['name'] == 'id') {?>
                        <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['key']->value['value']);?>
                    <?php }?>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            </form> 
        </div>
           
    </div>
            <?php echo smarty_function_listtask(array('id'=>$_smarty_tpl->tpl_vars['id']->value),$_smarty_tpl);?>
 
</div>     
<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
