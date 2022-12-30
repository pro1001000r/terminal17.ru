<?php
/* Smarty version 3.1.34-dev-7, created on 2022-11-25 06:05:20
  from '/var/www/u1845303/data/www/terminal17.ru/template/layouts/ListPrice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_638030f0f27db7_08044339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c53830b8c0a4256510970d6c07a6f553b2e0da8' => 
    array (
      0 => '/var/www/u1845303/data/www/terminal17.ru/template/layouts/ListPrice.tpl',
      1 => 1653007210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638030f0f27db7_08044339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Pagenation/function.pagenation.php','function'=>'smarty_function_pagenation',),1=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Foto/function.fotoView.php','function'=>'smarty_function_fotoView',),));
?>
<div class="row">
    <div class="col">   


        <?php echo smarty_function_pagenation(array('vp'=>$_smarty_tpl->tpl_vars['vpage']->value),$_smarty_tpl);?>


        <?php $_smarty_tpl->_assignInScope('i', 3);?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listprice']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value == 3;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?><div class="row row-flex"><?php }?>
                <div class="col-md-4">
                    <div class="card vShadow">   
                        <div class="card-body">   

                            <a href="/nomen/Edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class = "vit-color-0">
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                            </a>
                            <br><br>
                            <div class="text-center">   
                                <?php echo smarty_function_fotoView(array('foto'=>$_smarty_tpl->tpl_vars['item']->value['foto']),$_smarty_tpl);?>

                            </div>
                            <p>
                                <small>
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>

                                </small>
                            </p>

                            <br><br>
                            <div class="small text-right"> 
                                <b><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['item']->value['price']);?>
 </b>
                                р./<?php echo $_smarty_tpl->tpl_vars['item']->value['units'];?>

                            </div>
                        </div>
                    </div>
                    <br> 
                </div> 

                <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value-1);?>  
                <?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?></div><?php $_smarty_tpl->_assignInScope('i', 3);
}?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            <?php if ($_smarty_tpl->tpl_vars['i']->value <> 3) {?></div><?php }?>
    <br>



    <?php echo smarty_function_pagenation(array('vp'=>$_smarty_tpl->tpl_vars['vpage']->value),$_smarty_tpl);?>

</div>
</div><?php }
}
