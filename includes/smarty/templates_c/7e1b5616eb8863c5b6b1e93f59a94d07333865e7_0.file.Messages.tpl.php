<?php
/* Smarty version 3.1.34-dev-7, created on 2022-11-24 09:28:11
  from '/var/www/u1845303/data/www/terminal17.ru/vMVC/Message/plugins/Messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_637ed6bbb91544_66483213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e1b5616eb8863c5b6b1e93f59a94d07333865e7' => 
    array (
      0 => '/var/www/u1845303/data/www/terminal17.ru/vMVC/Message/plugins/Messages.tpl',
      1 => 1658367002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637ed6bbb91544_66483213 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Pagenation/function.pagenation.php','function'=>'smarty_function_pagenation',),1=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/template/plugins/function.getname.php','function'=>'smarty_function_getname',),2=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/template/plugins/function.dateformat.php','function'=>'smarty_function_dateformat',),));
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
