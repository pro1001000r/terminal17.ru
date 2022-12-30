<?php
/* Smarty version 3.1.34-dev-7, created on 2022-11-24 14:14:37
  from '/var/www/u1845303/data/www/terminal17.ru/vAtoms/Navbar/NavBar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_637f521d834988_92066093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b416b6c68ba2843dc439255a31424a20d17ccdd' => 
    array (
      0 => '/var/www/u1845303/data/www/terminal17.ru/vAtoms/Navbar/NavBar.tpl',
      1 => 1669288475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637f521d834988_92066093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vMVC/Find/plugins/function.find.php','function'=>'smarty_function_find',),1=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),));
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu">
    <div class="navbar-header">
        
        <a href="/" class='vit-color-0 vShadowT vit-font-1'>
            http://terminal17.ru
        </a>
            </div>
    <?php echo smarty_function_find(array(),$_smarty_tpl);?>


    <?php echo smarty_function_button(array('name'=>'','href'=>"/Nomen/List/",'icon'=>'bi-box-seam','comment'=>'Каталог'),$_smarty_tpl);?>


    
    
    </nav>

<nav class="navbar fixed-bottom navbar-light bg-light d-sm-block d-md-none d-lg-none d-xl-none" id="menu1">

    <?php echo smarty_function_button(array('name'=>'','href'=>"/",'icon'=>'bi-house-door','comment'=>'Главная'),$_smarty_tpl);?>

    <?php echo smarty_function_button(array('name'=>'','href'=>"/Find/View/",'icon'=>'bi-search','comment'=>'Поиск'),$_smarty_tpl);?>

        <?php echo smarty_function_button(array('name'=>'','href'=>"/Nomen/List/",'icon'=>'bi-box-seam','comment'=>'Каталог'),$_smarty_tpl);?>

        
</nav><?php }
}
