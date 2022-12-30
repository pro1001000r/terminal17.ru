<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-15 20:45:27
  from '/var/www/u1663726/data/www/vjone.ru/vAtoms/List/List.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62a9e277282215_48501490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e369e5bf77ced1ff72150b75d914016451d8e299' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vAtoms/List/List.tpl',
      1 => 1655106915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a9e277282215_48501490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Pagenation/function.pagenation.php','function'=>'smarty_function_pagenation',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/template/plugins/function.getname.php','function'=>'smarty_function_getname',),));
?>
<div class="card vShadow">
    <div class=" card-body">



        <div class="row">
            <div class="col">
                <div class='text-center h3'>Таблица: "<b><?php echo $_smarty_tpl->tpl_vars['tableNameUp']->value;?>
</b>"</div>
            </div>
        </div>
        <?php echo smarty_function_pagenation(array('vp'=>$_smarty_tpl->tpl_vars['vpage']->value),$_smarty_tpl);?>

        <div class="row">
            <div class="col">
                <table class="table table-striped table-condensed">
                    <thead>
                        <tr>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?>
                                <th scope="col"><?php echo $_smarty_tpl->tpl_vars['key']->value['name'];?>
</th>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <tr>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['key']->value['type'] == 'f') {?>
                                            <a href="/<?php echo $_smarty_tpl->tpl_vars['tableNameUp']->value;?>
/View/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style='color: #000'>
                                                <img src=" <?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['key']->value['name']];?>
" class="img-fluid rounded" style="max-width: 100px">
                                            </a>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['key']->value['name'] == 'id') {?>
                                            <a href="/<?php echo $_smarty_tpl->tpl_vars['tableNameUp']->value;?>
/Edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style='color: #000'>
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['key']->value['name']];?>

                                            </a>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['key']->value['type'] == 'sid') {?>
                                            <a href="/<?php echo $_smarty_tpl->tpl_vars['tableNameUp']->value;?>
/Edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style='color: #000'>
                                                <?php echo smarty_function_getname(array('table'=>$_smarty_tpl->tpl_vars['key']->value['table'],'id'=>$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['key']->value['name']]),$_smarty_tpl);?>

                                            </a>
                                        <?php } else { ?>
                                            <a href="/<?php echo $_smarty_tpl->tpl_vars['tableNameUp']->value;?>
/View/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                                                style='color: #000; max-width: 30%; word-break: break-word;'>
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['key']->value['name']];?>

                                            </a>
                                        <?php }?>
                                    </td>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><?php }
}
