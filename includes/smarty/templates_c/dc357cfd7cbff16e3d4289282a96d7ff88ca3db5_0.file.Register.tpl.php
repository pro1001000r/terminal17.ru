<?php
/* Smarty version 3.1.34-dev-7, created on 2022-07-10 18:04:45
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/User/view/Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62caea8d525719_14337791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc357cfd7cbff16e3d4289282a96d7ff88ca3db5' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/User/view/Register.tpl',
      1 => 1655719771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62caea8d525719_14337791 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <?php if (((isset($_smarty_tpl->tpl_vars['errors']->value) && is_array($_smarty_tpl->tpl_vars['errors']->value)))) {?>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
                        <li> - <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            <?php }?>
            
                <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js"><?php echo '</script'; ?>
>
            

            <h2>Регистрация на сайте</h2>
            <form action="#" method="post" id="form">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Имя" value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="login" placeholder="Логин" value=<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Пароль" value=<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password2" placeholder="Подтвеждение пароля"
                        value=<?php echo $_smarty_tpl->tpl_vars['password2']->value;?>
>
                </div>
                <div class="form-group">                    <div class="g-recaptcha" data-sitekey="6Lfms0YgAAAAADKlLXQ8tAxPYPTvBHqsNB7mg1K1"></div>
                </div>
                <div class="form-group">
                    <?php echo smarty_function_button(array('name'=>"Регистрация",'href'=>"/User/Register",'icon'=>'bi-magic'),$_smarty_tpl);?>

                </div>
            </form>
                    </div>
    </div>
</div>

<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
