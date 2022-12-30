<?php
/* Smarty version 3.1.34-dev-7, created on 2022-11-24 08:51:44
  from '/var/www/u1845303/data/www/terminal17.ru/vAtoms/Card/CardView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_637f067007bc71_06889648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7014bc48b1051d194f06328eddc3d353fcc93874' => 
    array (
      0 => '/var/www/u1845303/data/www/terminal17.ru/vAtoms/Card/CardView.tpl',
      1 => 1669268894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637f067007bc71_06889648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Foto/function.fotoView.php','function'=>'smarty_function_fotoView',),1=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/template/plugins/function.getname.php','function'=>'smarty_function_getname',),));
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

                        <?php if (($_smarty_tpl->tpl_vars['item']->value['count'])) {?>
            
                <p>
                 Есть в Наличии!!!   
                </p>
           
            <?php }?> 
                    </p>
        
        <br><br>
        <div class="text-right"> 
            <b><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['item']->value['price']);?>
 </b>
            р./<?php echo $_smarty_tpl->tpl_vars['item']->value['units'];?>

        </div>
    </div>
</div><?php }
}
