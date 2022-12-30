<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-21 22:45:16
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Linksite/view/LinksiteEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62b1e78ca3c999_69524244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac6c1a9e6872157c5dcd654138f037a10bd5cba3' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Linksite/view/LinksiteEdit.tpl',
      1 => 1655826313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b1e78ca3c999_69524244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/CREDPanel/function.CREDPanel.php','function'=>'smarty_function_CREDPanel',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),4=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Select/function.select.php','function'=>'smarty_function_select',),5=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>


<?php echo '<script'; ?>
 src="/vMVC/Linksite/js/vAjax.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/template/js/VitVoice.js" type="text/javascript"><?php echo '</script'; ?>
>

<div class="container-fluid">
    <div class="row vit-background-opacity">
        <div class="col">
            <form action="#" method="post" id="main" enctype="multipart/form-data">
<br>
                <div class="row">
                    <div class="col mx-5 card vShadow">

                        <br>

                                                <div class="form-group">

                            <?php echo smarty_function_CREDPanel(array('id'=>$_smarty_tpl->tpl_vars['id']->value),$_smarty_tpl);?>

                            <input type="text" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" hidden="true">

                        </div>

                                                <div class="text-center">
                            <button type="button" name="submit1" class="btn vit-color-0 vit-outline-0"
                                onclick="recognizeVit('comment')">
                                <span class="bi bi-mic-fill"></span>
                            </button>
                        </div>


                                                <?php $_smarty_tpl->_assignInScope('style', "
                        color:green;
                        background-color:black;
                        ");?>

                        <div class="form-group">
                            <label for="name" class="col-xs-2 col-form-label">Ссылка на сайт</label>

                            <input id="linkname" type="text" name="name"
                                class="form-control vShadow" placeholder="https://...ru"
                                value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" onchange="getTDI()">

                            <?php echo smarty_function_button(array('onclick'=>"getTDI()",'icon'=>"bi-arrow-repeat",'class'=>"vit-color-0 vit-outline-0"),$_smarty_tpl);?>

                        </div>

                        <p class="small" id='sTitle'>
                        </p>
                        <p class="small" id='sDescription'>
                        </p>
                        <p class="small" id='sImage'>
                        </p>

                        <div class="form-group">
                            <label for="comment" class="col-xs-2 col-form-label">Описание</label>
                            <textarea id="comment" name="comment" class="form-control"
                                placeholder="Описание"><?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</textarea>
                        </div>
                        <div class="small" hidden="true">
                            <div class="form-group">
                                <label for="data" class="col-xs-2 col-form-label">Дата </label>
                                <input type="datetime-local" name="data" class="form-control" placeholder="Дата"
                                    value=<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
>
                            </div>

                            <div class="form-group">
                                <label for="users_id" class="col-xs-2 col-form-label">Пользователь</label>
                                <?php echo smarty_function_select(array('table'=>'users','value'=>$_smarty_tpl->tpl_vars['users_id']->value,'id'=>'id'),$_smarty_tpl);?>

                            </div>

                            <div class="form-group">
                                <label for="sitetitle" class="col-xs-2 col-form-label">sitetitle </label>
                                <textarea id="sitetitle" name="sitetitle" class="form-control"
                                    placeholder="Описание"><?php echo $_smarty_tpl->tpl_vars['sitetitle']->value;?>
</textarea>
                            </div>

                            <div class="form-group">
                                <label for="sitedescription" class="col-xs-2 col-form-label">sitedescription </label>
                                <textarea id="sitedescription" name="sitedescription" class="form-control"
                                    placeholder="Описание"><?php echo $_smarty_tpl->tpl_vars['sitedescription']->value;?>
</textarea>
                            </div>

                            <div class="form-group">
                                <label for="siteimage" class="col-xs-2 col-form-label">siteimage </label>
                                <textarea id="siteimage" name="siteimage" class="form-control"
                                    placeholder="Описание"><?php echo $_smarty_tpl->tpl_vars['siteimage']->value;?>
</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
