<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-21 23:30:47
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Clients/view/Listtask.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62b1f237dd6bb2_11916303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e318007956e9f48029a4ba19503d31edcba29065' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Clients/view/Listtask.tpl',
      1 => 1640754537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b1f237dd6bb2_11916303 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/template/plugins/function.getname.php','function'=>'smarty_function_getname',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/template/plugins/function.fotoPath.php','function'=>'smarty_function_fotoPath',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/template/plugins/function.dateformat.php','function'=>'smarty_function_dateformat',),));
?>

<div class = "row">       
    <div class = "col">

        <p class="text-center font-weight-bold">Задачи</p>
        <?php if ((!$_smarty_tpl->tpl_vars['userIsGuest']->value)) {?> 
            <?php echo smarty_function_button(array('name'=>'','href'=>'/Task/Edit/','icon'=>'glyphicon glyphicon-plus'),$_smarty_tpl);?>

        <?php }?>
        <br>
    </div> 
</div>


<br>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?> 
    <div class = "row">
        <div class = "col">
            <div class = "card vShadow">
                <div class = "card-title text-center font-weight-bold">
                    <a href="/task/Edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="text-dark">
                        <?php echo smarty_function_getname(array('table'=>'clients','id'=>$_smarty_tpl->tpl_vars['item']->value['clients_id']),$_smarty_tpl);?>
<br>  
                    </a>
                    <a href="/task/Edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="text-dark">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
  
                    </a>
                </div>
                <div class="card-body">

                    <?php if (($_smarty_tpl->tpl_vars['item']->value['foto'] <> '')) {?>
                        <img src="<?php echo smarty_function_fotoPath(array('foto'=>$_smarty_tpl->tpl_vars['item']->value['foto']),$_smarty_tpl);?>
" class="img-responsive vImageleft" style="width: 100px">
                    <?php }?> 
                    <?php if (($_smarty_tpl->tpl_vars['item']->value['dataend'] == '')) {?>
                        <p class="text-center font-weight-bold text-danger">
                            Не завершена!!!
                        </p>
                        <br>
                    <?php }?> 
                    от: <?php echo smarty_function_dateformat(array('d'=>$_smarty_tpl->tpl_vars['item']->value['data']),$_smarty_tpl);?>
 <br>
                    <span class="text-secondary font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['item']->value['dopisanie'];?>
</span><br>
            
                    до: <?php echo smarty_function_dateformat(array('d'=>$_smarty_tpl->tpl_vars['item']->value['dataend']),$_smarty_tpl);?>
<br>
                    <span class="glyphicon glyphicon-time font-weight-bold"></span><b>: <?php echo $_smarty_tpl->tpl_vars['item']->value['dlit'];?>
</b><br>
                    <br>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>

                </div>
                <div class = "card-subtitle  text-right pb-0 pt-0">

                    <?php if (($_smarty_tpl->tpl_vars['item']->value['price'] <> '')) {?>
                        <span class="glyphicon glyphicon-ruble"></span>: <b><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 </b> 
                    <?php }?> 
                    <span class="glyphicon glyphicon-user"></span>: <b><?php echo smarty_function_getname(array('table'=>'users','id'=>$_smarty_tpl->tpl_vars['item']->value['users_id']),$_smarty_tpl);?>
</b> 
                    <a class="btn btn-link text-dark" href="/task/Edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"> ред.»</a>
                </div>
            </div>
        </div> 
    </div>
    <br>            
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
