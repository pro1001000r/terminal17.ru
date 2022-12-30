<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-21 18:48:17
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Linksite/plugins/CardLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62b1e841a88ef9_89094030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65ad6246c101973dfddcd711fdccff34b87b2d77' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Linksite/plugins/CardLink.tpl',
      1 => 1655719657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b1e841a88ef9_89094030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/template/plugins/function.dateformat.php','function'=>'smarty_function_dateformat',),));
?>
<div class='card vShadow'>
    <div class="card-body">
        <?php if ($_smarty_tpl->tpl_vars['item']->value['comment'] <> '') {?>
            <div class="h5">
                <i class='bi bi-text-left vShadowT'></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>

            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['sitetitle'] <> '') {?>
            <div class="h5">
                                <a href=<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 target="_blank">
                    <i class='bi bi-code-slash vShadowT'></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['sitetitle'];?>

                </a>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['siteimage'] <> '') {?>
            <a href=<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 target="_blank">
                <img src=<?php echo $_smarty_tpl->tpl_vars['item']->value['siteimage'];?>
 class="img-responsive img-thumbnail"><br>
            </a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['sitedescription'] <> '') {?>
            <?php echo $_smarty_tpl->tpl_vars['item']->value['sitedescription'];?>

        <?php }?>
    </div>

    <div class="card-footer small">
        Ссылка на сайт:<br>
        <a href=<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 target="_blank" class="vit-color-0"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>

        <div class="text-right">

            <?php if ((!$_smarty_tpl->tpl_vars['userIsGuest']->value)) {?>
                <?php $_smarty_tpl->_assignInScope('src', $_smarty_tpl->tpl_vars['item']->value['id']);?>
                <?php echo smarty_function_button(array('name'=>'','href'=>"/Linksite/Edit/".((string)$_smarty_tpl->tpl_vars['src']->value),'icon'=>'bi-pencil-square'),$_smarty_tpl);?>

            <?php }?>

            <i class="bi bi-watch vit-color-0"></i>
            <?php echo smarty_function_dateformat(array('d'=>$_smarty_tpl->tpl_vars['item']->value['data']),$_smarty_tpl);?>

        </div>
    </div>
</div><?php }
}
