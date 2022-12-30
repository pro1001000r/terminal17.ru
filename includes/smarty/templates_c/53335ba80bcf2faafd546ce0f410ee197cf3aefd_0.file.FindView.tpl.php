<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-20 17:54:00
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Find/view/FindView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62b08a084d0814_27482038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53335ba80bcf2faafd546ce0f410ee197cf3aefd' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Find/view/FindView.tpl',
      1 => 1655719646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b08a084d0814_27482038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Card/function.Card.php','function'=>'smarty_function_Card',),4=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vMVC/Linksite/plugins/function.CardLink.php','function'=>'smarty_function_CardLink',),5=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>


<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <form action="/find/view/" method="post">

                <div class="btn-group" role="group">
                    <input name="qFind1" id="qFind1" type="text" class="input-group-text bg-white vit-outline-0"
                        placeholder="Поиск..." value="" ohchange="$('#btnFind').click()">

                    <?php echo smarty_function_button(array('onclick'=>"FindClick()",'icon'=>"bi-search",'classbtn'=>'vit-outline-0'),$_smarty_tpl);?>

                    <button type="submit" id="btnFind" hidden="true"></button>
                </div>

            </form>
        </div>
    </div>
    <br>
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
                    <?php echo smarty_function_Card(array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>

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
