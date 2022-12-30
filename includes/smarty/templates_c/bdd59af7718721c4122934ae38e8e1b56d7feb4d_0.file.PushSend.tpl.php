<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-20 17:59:59
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Push/view/PushSend.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62b08b6fc74099_22026037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdd59af7718721c4122934ae38e8e1b56d7feb4d' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Push/view/PushSend.tpl',
      1 => 1655719739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b08b6fc74099_22026037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Select/function.select.php','function'=>'smarty_function_select',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),4=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>


<div class="container-fluid">
    <div class="row vit-background-opacity">
        <div class="col-10 offset-1 font-weight-lighter">
            <form action="#" method="post" id='FormPushSend' enctype="multipart/form-data">

                <div class="form-group row form-inline">
                    <label for="name1" class="col-sm-2">Заголовок: </label>
                    <input type="text" name="name" id="name1" class="col-sm-10 form-control" placeholder="Заголовок"
                        value="Заголовок">
                </div>
                <div class="form-group row form-inline">
                    <label for="name2" class="col-sm-2">Сообщение: </label>
                    <input type="text" name="name2" id="name2" class="col-sm-10 form-control" placeholder="Сообщение"
                        value="Сообщение">
                </div>

                <div class="form-group row form-inline">

                    <label for="users_id" class="col-sm-2">Клиент: </label>
                    <?php echo smarty_function_select(array('table'=>'users','value'=>'12','id'=>'id'),$_smarty_tpl);?>

                </div>
                <div class="form-group row form-inline">

                    <label for="comment" class="col-sm-2">Описание: </label>
                    <textarea id="comment" name="comment" rows="7" cols="50" class="col-sm-10 form-control"
                        placeholder="Описание"></textarea>

                </div>

                <div class="form-group row form-inline">

                    <label for="users2_id" class="col-sm-2">Исполнитель: </label>
                    <?php echo smarty_function_select(array('table'=>'users','value'=>'12','id'=>'id'),$_smarty_tpl);?>

                </div>
                <div class="form-group row form-inline">

                    <label for="data" class="col-sm-2">Дата: </label>
                    <input type="datetime-local" name="data" class="col-sm-10 form-control" placeholder="Дата" value="">
                </div>

                <div class="form-group row form-inline">

                    <?php echo smarty_function_button(array('name'=>"отправить",'icon'=>'bi-envelope-open-fill','onclick'=>'PushSend()'),$_smarty_tpl);?>

                </div>
            </form>
        </div>
    </div>
</div>


    <?php echo '<script'; ?>
 src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://www.gstatic.com/firebasejs/8.10.0/firebase-messaging.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/vMVC/Push/js/PushSend.js"><?php echo '</script'; ?>
>



<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
