<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-15 18:17:25
  from '/var/www/u1663726/data/www/vjone.ru/vAtoms/Card/CardView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62a9bfc5157b86_28311395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08f4b43816788efeea8f0867a9f792c0bd39f966' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vAtoms/Card/CardView.tpl',
      1 => 1655281222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a9bfc5157b86_28311395 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Foto/function.fotoView.php','function'=>'smarty_function_fotoView',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/template/plugins/function.getname.php','function'=>'smarty_function_getname',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vMVC/Cart/plugins/function.buttonOrder.php','function'=>'smarty_function_buttonOrder',),));
?>

<div class="card vShadow">   
    <div class="card-body">
        <?php if ((!$_smarty_tpl->tpl_vars['usersGuest']->value)) {?>
            <a href="/nomen/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class = "vit-color-0">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

            </a>
        <?php } else { ?>
            <a href="/nomen/view/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class = "vit-color-0">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

            </a>
        <?php }?>
        <br><br>
        <div class="text-center">   
            <?php echo smarty_function_fotoView(array('foto'=>$_smarty_tpl->tpl_vars['item']->value['foto']),$_smarty_tpl);?>

        </div>
        <p>
            Категория: <?php echo smarty_function_getname(array('table'=>'category','id'=>$_smarty_tpl->tpl_vars['item']->value['category_id']),$_smarty_tpl);?>

            <br>
            Код: <?php echo $_smarty_tpl->tpl_vars['item']->value['code1c'];?>

            <br>
            Артикул: <?php echo $_smarty_tpl->tpl_vars['item']->value['article'];?>

            <br>
            Описание: <?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>

            <br>
            qrcode: <br>
            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['qr'];?>
" class="img-responsive">
        </p>
        <?php echo smarty_function_buttonOrder(array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>


        <br><br>
        <div class="text-right"> 
            <b><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['item']->value['price']);?>
 </b>
            р./<?php echo $_smarty_tpl->tpl_vars['item']->value['units'];?>

        </div>
    </div>
</div><?php }
}
