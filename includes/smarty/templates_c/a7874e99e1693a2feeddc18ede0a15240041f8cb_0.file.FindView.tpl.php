<?php
/* Smarty version 3.1.34-dev-7, created on 2022-12-06 11:16:46
  from '/var/www/u1845303/data/www/terminal17.ru/vMVC/Find/view/FindView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_638efa6e18b6e2_14304690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7874e99e1693a2feeddc18ede0a15240041f8cb' => 
    array (
      0 => '/var/www/u1845303/data/www/terminal17.ru/vMVC/Find/view/FindView.tpl',
      1 => 1670314544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638efa6e18b6e2_14304690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/StrVit/function.StrVit.php','function'=>'smarty_function_StrVit',),3=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vMVC/Linksite/plugins/function.CardLink.php','function'=>'smarty_function_CardLink',),4=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>


<div class="container">
        <?php if ($_smarty_tpl->tpl_vars['findlist']->value == array()) {?>
        <div class="row">
            <div class="col h2 text-center">
                Ничего не найдено
            </div>
        </div>
    <?php }?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['findlist']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <div class="row">
            <div class="col-10 offset-1">
                <?php if ($_smarty_tpl->tpl_vars['item']->value['tableName'] == 'Nomen') {?>
                    <?php echo smarty_function_StrVit(array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['tableName'] == 'Linksite') {?>
                                        <?php echo smarty_function_CardLink(array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>

                <?php } else { ?>
                    <div class="card vShadow">
                        <div class="card-body">
                            <div class="font-weight-bold">
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                            </div>
                        </div>
                        <div class="card-footer text-right pb-0 pt-0">
                            <a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['tableName'];?>
/View/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="vit-color-0">
                                <small>Подробнее »</small>
                            </a>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
        <br>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
