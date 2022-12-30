<?php
/* Smarty version 3.1.34-dev-7, created on 2022-07-14 10:14:04
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Task/view/TaskEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62cfc23c0bbc83_62390307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efe3c897026661959459e68d0ec3198376627213' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Task/view/TaskEdit.tpl',
      1 => 1657782836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cfc23c0bbc83_62390307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/CREDPanel/function.CREDPanel.php','function'=>'smarty_function_CREDPanel',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Select/function.select.php','function'=>'smarty_function_select',),4=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/template/plugins/function.fotoPath.php','function'=>'smarty_function_fotoPath',),5=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>

<?php echo '<script'; ?>
 src="/components/bootstrap/js/jquery-3.4.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/template/js/VitVoice.js" type="text/javascript"><?php echo '</script'; ?>
>

<div class="container-fluid">
    <div class="row vit-background-opacity">
        <div class="col-10 offset-1 font-weight-lighter">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group h2">

                    <?php echo smarty_function_CREDPanel(array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']['value']),$_smarty_tpl);?>


                    <button type="button" name="submit1" class="btn vit-color-0 vit-outline-0"
                        onclick="recognizeVit('comment')">
                        <span class="bi bi-mic-fill"></span>
                    </button>

                    <button type="button" name="submit2" class="btn vit-color-0 vit-outline-0"
                        onclick="speak('comment')">
                        <span class="glyphicon glyphicon-volume-up"></span>
                    </button>


                </div>
                <input type="text" name="id" class="col-sm-10 form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id']['value'];?>
"
                    style="display: none" readonly>

                <div class="form-group row form-inline">
                    <label for="name" class="col-sm-2">Наименование: </label>
                    <input type="text" name="name" class="col-sm-10 form-control" placeholder="Наименование"
                        value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name']['value'];?>
">
                </div>
                <div class="form-group row form-inline">

                    <label for="users_id" class="col-sm-2">Клиент: </label>
                    <?php echo smarty_function_select(array('table'=>'clients','value'=>$_smarty_tpl->tpl_vars['item']->value['clients_id']['value'],'id'=>'id'),$_smarty_tpl);?>

                </div>
                <div class="form-group row form-inline">

                    <label for="comment" class="col-sm-2">Описание: </label>
                    <textarea id="comment" name="comment" rows="7" cols="50" class="col-sm-10 form-control"
                        placeholder="Описание"><?php echo $_smarty_tpl->tpl_vars['item']->value['comment']['value'];?>
</textarea>

                </div>

                <div class="form-group row form-inline">

                    <label for="users_id" class="col-sm-2">Исполнитель: </label>
                    <?php echo smarty_function_select(array('table'=>'users','value'=>$_smarty_tpl->tpl_vars['item']->value['users_id']['value'],'id'=>'id'),$_smarty_tpl);?>

                </div>
                <div class="form-group row form-inline">

                    <label for="data" class="col-sm-2">Дата начала: </label>
                    <input type="datetime-local" id="data" name="data" class="col-sm-10 form-control" placeholder="Дата"
                        value="<?php echo $_smarty_tpl->tpl_vars['item']->value['data']['value'];?>
">
                </div>
                <div class="form-group row form-inline">

                    <label for="dataend" class="col-sm-2">Дата окончания: </label>
                    <input type="datetime-local" id="dataend" name="dataend" class="col-sm-10 form-control"
                        placeholder="Введите дату по завершению" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['dataend']['value'];?>
">
                </div>
                <div class="form-group row form-inline">

                    <label for="price" class="col-sm-2">Стоимость: </label>
                    <input type="number" name="price" id="price" class="col-sm-10 form-control" value=<?php echo $_smarty_tpl->tpl_vars['item']->value['price']['value'];?>

                        data-decimals="2" step="0.1">
                </div>
                <div class="form-group row form-inline">

                    <input id="my_image_button" type="file" class="col-sm-10 form-control" name="fotopath"
                        onchange="readFile(this)" style="display: none" />
                    <img id="vit_image" src="<?php echo smarty_function_fotoPath(array('foto'=>$_smarty_tpl->tpl_vars['item']->value['foto']['value']),$_smarty_tpl);?>
" class="img-thumbnail img-fluid"
                        style="width: 250px" onclick="document.getElementById('my_image_button').click();"
                        style="cursor: pointer">
                </div>

            </form>

            
                <?php echo '<script'; ?>
 type="text/javascript">
                    $('#dataend').change(function() {
                        //alert('1700');
                        var data = new Date($('#data').val());
                        //alert(data);
                        var dataend = new Date($('#dataend').val());
                        var sum = Math.round((dataend.getTime()-data.getTime())/60000 * 1700/60);
                        var price = $('#price').val();
                        if (price == 0){
                            //alert(sum);
                            $('#price').val(sum);
                        };
                    });
                    
                <?php echo '</script'; ?>
>
            

        </div>
    </div>
</div>
<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
