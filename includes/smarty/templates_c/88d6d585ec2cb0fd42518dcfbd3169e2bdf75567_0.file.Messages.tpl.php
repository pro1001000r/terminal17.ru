<?php
/* Smarty version 3.1.34-dev-7, created on 2022-07-21 08:30:04
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Message/plugins/Messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62d8e45c671b83_86445680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88d6d585ec2cb0fd42518dcfbd3169e2bdf75567' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Message/plugins/Messages.tpl',
      1 => 1658381402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d8e45c671b83_86445680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Pagenation/function.pagenation.php','function'=>'smarty_function_pagenation',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/template/plugins/function.getname.php','function'=>'smarty_function_getname',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/template/plugins/function.dateformat.php','function'=>'smarty_function_dateformat',),));
echo smarty_function_pagenation(array('vp'=>$_smarty_tpl->tpl_vars['vpage']->value),$_smarty_tpl);?>

<div class="row">
    <div class="col">


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value == $_smarty_tpl->tpl_vars['item']->value['users_id']) {?>
                <div class="text-right">
                    <small>
                        от <b><?php echo smarty_function_getname(array('table'=>'users','id'=>$_smarty_tpl->tpl_vars['item']->value['users_id']),$_smarty_tpl);?>
</b>
                        <?php echo smarty_function_dateformat(array('d'=>$_smarty_tpl->tpl_vars['item']->value['date']),$_smarty_tpl);?>

                        для <b><?php echo smarty_function_getname(array('table'=>$_smarty_tpl->tpl_vars['item']->value['fromtable'],'id'=>$_smarty_tpl->tpl_vars['item']->value['fromid']),$_smarty_tpl);?>
</b>
                    </small>
                    <div class="bubble-right bubble-in vShadow">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>

                    </div>
                </div>
            <?php } else { ?>
                <div class="text-left">
                    <small>
                        от <b><?php echo smarty_function_getname(array('table'=>'users','id'=>$_smarty_tpl->tpl_vars['item']->value['users_id']),$_smarty_tpl);?>
</b>
                        <?php echo smarty_function_dateformat(array('d'=>$_smarty_tpl->tpl_vars['item']->value['date']),$_smarty_tpl);?>

                        
                        для <b><?php echo smarty_function_getname(array('table'=>$_smarty_tpl->tpl_vars['item']->value['fromtable'],'id'=>$_smarty_tpl->tpl_vars['item']->value['fromid']),$_smarty_tpl);?>
</b>
                    </small>
                    <div class="bubble-left bubble-in vShadow">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>

                    </div>
                </div>
            <?php }?>
            <br>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    </div>
</div>
<br>
<?php echo smarty_function_pagenation(array('vp'=>$_smarty_tpl->tpl_vars['vpage']->value),$_smarty_tpl);
}
}
