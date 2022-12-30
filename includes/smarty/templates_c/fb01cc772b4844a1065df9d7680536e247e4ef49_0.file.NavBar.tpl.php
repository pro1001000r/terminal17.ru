<?php
/* Smarty version 3.1.34-dev-7, created on 2022-11-24 05:56:55
  from '/var/www/u1845303/data/www/terminal17.ru/vAtoms/Navbar/NavBar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_637edd77b23ef0_18974332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb01cc772b4844a1065df9d7680536e247e4ef49' => 
    array (
      0 => '/var/www/u1845303/data/www/terminal17.ru/vAtoms/Navbar/NavBar.tpl',
      1 => 1669258596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637edd77b23ef0_18974332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vMVC/Find/plugins/function.find.php','function'=>'smarty_function_find',),1=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),));
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu">
    <div class="navbar-header">
        
        <a href="/" class='vit-color-0 vShadowT vit-font-1'>
            http://terminal.ru
        </a>
            </div>
    <?php echo smarty_function_find(array(),$_smarty_tpl);?>


    <?php echo smarty_function_button(array('name'=>'','href'=>"/Nomen/List/",'icon'=>'bi-box-seam','comment'=>'Каталог'),$_smarty_tpl);?>


    
    
    <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#Vit-navbar-collapse"
        aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="Vit-navbar-collapse">

        <ul class="nav navbar-nav navbar-right">

            <li class="navbar-item">

                <?php echo smarty_function_button(array('name'=>'','href'=>"Linksite",'icon'=>'bi-code-slash','comment'=>'Полезные сайты'),$_smarty_tpl);?>

                <?php if (($_smarty_tpl->tpl_vars['userIsGuest']->value)) {?>
                    <?php echo smarty_function_button(array('name'=>'','href'=>"/User/Login/",'icon'=>'bi-key-fill','comment'=>'Только для зарегистрированных пользователей. 
                    Мы регистрируем вручную без роботов и наши клиенты нас знают'),$_smarty_tpl);?>


                <?php } else { ?>
                    <?php if (($_smarty_tpl->tpl_vars['isAdmin']->value)) {?>
                        <?php echo smarty_function_button(array('name'=>'','comment'=>'Админка','href'=>"/Admin/View/",'icon'=>'bi-gear-fill'),$_smarty_tpl);?>

                        <?php echo smarty_function_button(array('name'=>'','comment'=>'Добавить ссылку на сайт','href'=>"/Linksite/Edit/",'icon'=>'bi-code-slash','mode'=>'new'),$_smarty_tpl);?>

                    <?php }?>
                    <?php echo smarty_function_button(array('name'=>$_smarty_tpl->tpl_vars['userName']->value,'href'=>"/Cabinet/",'icon'=>'bi-person-check-fill','comment'=>'Кабинет пользователя'),$_smarty_tpl);?>

                    <?php echo smarty_function_button(array('name'=>'','comment'=>'Выход','href'=>"/User/Logout/",'icon'=>'bi-door-open-fill'),$_smarty_tpl);?>


                <?php }?>
            </li>
        </ul>
    </div>
</nav>

<nav class="navbar fixed-bottom navbar-light bg-light d-sm-block d-md-none d-lg-none d-xl-none" id="menu1">

    <?php echo smarty_function_button(array('name'=>'','href'=>"/",'icon'=>'bi-house-door','comment'=>'Главная'),$_smarty_tpl);?>

    <?php echo smarty_function_button(array('name'=>'','href'=>"/Find/View/",'icon'=>'bi-search','comment'=>'Поиск'),$_smarty_tpl);?>

        <?php echo smarty_function_button(array('name'=>'','href'=>"/Nomen/List/",'icon'=>'bi-box-seam','comment'=>'Каталог'),$_smarty_tpl);?>

        
</nav><?php }
}
