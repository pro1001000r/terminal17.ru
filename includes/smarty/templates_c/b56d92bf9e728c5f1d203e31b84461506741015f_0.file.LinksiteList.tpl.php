<?php
/* Smarty version 3.1.34-dev-7, created on 2022-11-24 05:56:55
  from '/var/www/u1845303/data/www/terminal17.ru/vMVC/Linksite/view/LinksiteList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_637edd77b09f19_80197846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b56d92bf9e728c5f1d203e31b84461506741015f' => 
    array (
      0 => '/var/www/u1845303/data/www/terminal17.ru/vMVC/Linksite/view/LinksiteList.tpl',
      1 => 1655705304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637edd77b09f19_80197846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),3=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vMVC/Find/plugins/function.find.php','function'=>'smarty_function_find',),4=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Pagenation/function.pagenation.php','function'=>'smarty_function_pagenation',),5=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/template/plugins/function.dateformat.php','function'=>'smarty_function_dateformat',),6=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>

<section>
    <div class="container">
        <div class="row">
            <div class="col text-center vit-color-0 h4">
                <br>
                <i class='bi bi-code-slash'></i> Ссылки на сайты:
            </div>
        </div>
        <div class="row">
            <div class="col h5 vit-font-0">
                <p class='text-center'>
                    В данном разделе накопленны ссылки на интересные и полезные ресурсы сети
                </p>
            </div>
        </div>

        <div class="row">
            <?php if ((!$_smarty_tpl->tpl_vars['userIsGuest']->value)) {?>
                <div class="col">
                    <?php echo smarty_function_button(array('name'=>'Добавить ссылку','href'=>"/Linksite/Edit/",'icon'=>'bi-plus-circle-fill'),$_smarty_tpl);?>

                </div>
            <?php }?>
            <div class="col">
                <?php echo smarty_function_find(array(),$_smarty_tpl);?>

            </div>
        </div>
        <br>
        <?php echo smarty_function_pagenation(array('vp'=>$_smarty_tpl->tpl_vars['vpage']->value),$_smarty_tpl);?>


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <div class="row">
                <div class="col">
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
                    </div>
                </div>
            </div>
            <br>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php echo smarty_function_pagenation(array('vp'=>$_smarty_tpl->tpl_vars['vpage']->value),$_smarty_tpl);?>

    </div>
</section>


<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
