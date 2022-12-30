<?php
/* Smarty version 3.1.34-dev-7, created on 2022-07-22 11:10:00
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/User/view/Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62da5b582229c0_80660309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6126cf25ed8d580ca724a9ea24497c592b2415e1' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/User/view/Login.tpl',
      1 => 1658477390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62da5b582229c0_80660309 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>


<section>
    <div class="container-fluid vit-background-opacity">
        <div class="row">
            <div class="col-10 offset-1 text-center">

                <?php if (((isset($_smarty_tpl->tpl_vars['errors']->value) && is_array($_smarty_tpl->tpl_vars['errors']->value)))) {?>
                <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
                <li> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <?php }?>

                <div class="h3">
                    Вход в личный кабинет
                </div>
                <form action="#" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="login" placeholder="Логин" value=<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Пароль" value=<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
>
                    </div>
                    <div class="form-group">
                        <?php echo smarty_function_button(array('name'=>"Вход",'icon'=>'bi-key-fill'),$_smarty_tpl);?>

                                            </div>
                </form>
                  
                <br>
                <br>
            </div>
        </div>
    </div>
</section>
<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
