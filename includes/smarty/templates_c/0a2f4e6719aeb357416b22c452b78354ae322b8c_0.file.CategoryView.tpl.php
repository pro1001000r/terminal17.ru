<?php
/* Smarty version 3.1.34-dev-7, created on 2022-11-24 06:22:07
  from '/var/www/u1845303/data/www/terminal17.ru/vMVC/Category/view/CategoryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_637ee35f88bd44_78966876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a2f4e6719aeb357416b22c452b78354ae322b8c' => 
    array (
      0 => '/var/www/u1845303/data/www/terminal17.ru/vMVC/Category/view/CategoryView.tpl',
      1 => 1655552896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637ee35f88bd44_78966876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/template/plugins/function.fotoPath.php','function'=>'smarty_function_fotoPath',),3=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>


<div class="container-fluid">
    <div class="row vit-background-opacity">
        <div class="col offset-2">
            <a class="btn btn-default" href="/<?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
/List/">
                <span class="glyphicon glyphicon-list"></span>
            </a>
            <br>
            <p>Номер: <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</p>
            <br>
            <p>Наименование: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
            <br>
            <p>Описание: <?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</p>
            <br>
            <p>Фото: <?php echo $_smarty_tpl->tpl_vars['foto']->value;?>
</p>
            <br>
            <img id="vit_image" src="<?php echo smarty_function_fotoPath(array('foto'=>$_smarty_tpl->tpl_vars['foto']->value),$_smarty_tpl);?>
" class="img-responsive img-thumbnail">
            <br>
        </div>
    </div>
</div>

<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
