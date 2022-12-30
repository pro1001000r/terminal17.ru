<?php
/* Smarty version 3.1.34-dev-7, created on 2022-12-06 13:29:29
  from '/var/www/u1845303/data/www/terminal17.ru/vAtoms/StrVit/StrVitView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_638f1989e6d690_62993668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307580cc1b3bec3c194a4c199a197cf235dcce4a' => 
    array (
      0 => '/var/www/u1845303/data/www/terminal17.ru/vAtoms/StrVit/StrVitView.tpl',
      1 => 1670322563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638f1989e6d690_62993668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/template/plugins/function.getname.php','function'=>'smarty_function_getname',),));
?>
<div class="small">
    <?php if ((!$_smarty_tpl->tpl_vars['usersGuest']->value)) {?>
        <a href="/nomen/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="vit-color-0">
            <b><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</b>
        </a>
    <?php } else { ?>
        <a href="/nomen/view/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="vit-color-0">
            <b><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</b>
        </a>
    <?php }?>
   
    <br>
    <b><?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>
</b>
 
    <div class="row">
        <div class="col-6">
            <br>
            Категория: <?php echo smarty_function_getname(array('table'=>'category','id'=>$_smarty_tpl->tpl_vars['item']->value['category_id']),$_smarty_tpl);?>

            <br>
            Код: <?php echo $_smarty_tpl->tpl_vars['item']->value['code1c'];?>

        </div>
        <div class="col text-center">
            <?php if (($_smarty_tpl->tpl_vars['item']->value['count'])) {?>

                <b class="text-success">Есть на складе</b>
                <br>
            <?php }?>

            <b><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['item']->value['price']);?>
 </b>
            р./<?php echo $_smarty_tpl->tpl_vars['item']->value['units'];?>

        </div>
    </div>



    <hr>
</div><?php }
}
