<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-20 13:24:31
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Admin/view/AdminView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62b04adf1e7c98_89536500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b18d726e8c2c9465815c2c9754e727b683edba0' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Admin/view/AdminView.tpl',
      1 => 1655720669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b04adf1e7c98_89536500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>


<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3 class="text-center">
                Кабинет администратора
            </h3>

            <p> Пользователь: <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <br>
                Статус доступа: 
                <?php if ($_smarty_tpl->tpl_vars['user']->value['status'] == 'S') {?>
                    Супервизор
                <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['status'] == 'A') {?>
                    Администратор    
                <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['status'] == 'U') {?>
                    Пользователь
                <?php }?>
            <p>
        </div>    
    </div> 

    <div class = "row">
        <div class="col-sm-8 col-sm-offset-2 padding-right">

            <?php echo smarty_function_button(array('href'=>'fotos','name'=>'Фото','icon'=>'bi-images'),$_smarty_tpl);?>

            <?php echo smarty_function_button(array('name'=>'Клиенты','href'=>'clients'),$_smarty_tpl);?>

            <?php echo smarty_function_button(array('name'=>'Новости','href'=>'News'),$_smarty_tpl);?>

            <?php echo smarty_function_button(array('name'=>'Категории','href'=>'category'),$_smarty_tpl);?>

            <?php echo smarty_function_button(array('name'=>'Полезные сайты','href'=>"Linksite",'icon'=>'bi-code-slash'),$_smarty_tpl);?>

            <?php echo smarty_function_button(array('name'=>'Новые Иконки','href'=>'/Icons/View/'),$_smarty_tpl);?>

            <?php echo smarty_function_button(array('name'=>'Баннеры','href'=>'banner'),$_smarty_tpl);?>


            <?php if ($_smarty_tpl->tpl_vars['user']->value['status'] == 'S') {?>

                <?php echo smarty_function_button(array('name'=>'Отладка','href'=>'/Develop/View/','icon'=>"icon-cogs"),$_smarty_tpl);?>
 <br><br>

            <?php }?>
        </div>
    </div>
    <div class = "row">
        
            </div>



</div>


<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
