<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-18 18:37:22
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Cart/view/CartView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62adf1324f0016_03714796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d618e8fd89c83448fe8ca31d3fa45e66d2df12c' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Cart/view/CartView.tpl',
      1 => 1655566636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62adf1324f0016_03714796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Orders/function.orders.php','function'=>'smarty_function_orders',),4=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>

<div class="container">
    <br>
    <?php if ($_smarty_tpl->tpl_vars['orderNull']->value) {?>
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <h1>
                        Корзина пуста
                    </h1>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <h1>
                        Корзина товаров
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped table-condensed">
                    <tr>
                        <th>id</th>
                        <th>code1c</th>
                        <th>name</th>
                        <th>count</th>
                        <th>price</th>
                        <th>sum</th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                            <td></td>
                            <td>
                                <a class="" href="/Nomen/Edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                                </a>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['sum'];?>
</td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </div>
        </div>
        <?php echo smarty_function_button(array('name'=>'очистить корзину','href'=>"/Cart/Clear/"),$_smarty_tpl);?>

        <div class="row">
            <div class="col-8 offset-2">
                <div class="text-center">
                    <input type="text" id="phone" name="phone" maxlength="30" class="form-control" value=""
                        placeholder="Введите номер телефона">
                    <?php if (($_smarty_tpl->tpl_vars['user']->value <> '')) {?>
                                            <?php }?>
                    <input type="text" id="user" name="user" maxlength="30" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
"
                        hidden="true">

                </div>
            </div>
            <div class="col-8 offset-2">
                <p class="small">
                    Нажимая на кнопку "Оформить заказ", вы даете согласие
                    на обработку персональных данных и соглашаетесь c
                    <a href="/confidence/" target="_blank">политикой конфиденциальности</a>
                </p>
                <div class="text-center">
                    <button class="btn btn-primary" onclick="SetOrder()">Оформить заказ</button>
                </div>
            </div>
        </div>
        
            <?php echo '<script'; ?>
 type="text/javascript">
                function SetOrder() {
                    var fd = new FormData();
                    fd.append('SetOrder', 1);
                    fd.append('phone', $('#phone').val());
                    fd.append('user', $('#user').val());

                    $.ajax({
                        url: '/Cart/Ajax/',
                        data: fd,
                        processData: false,
                        contentType: false,
                        type: 'POST',
                        success: function(data) {
                            reloadCart(data);
                        }
                    });
                }

                function reloadCart(data) {
                    alert(data);
                    // перезагружаем страничку
                    location.reload();
                }
            <?php echo '</script'; ?>
>
        

    <?php }?>
    <br>
    <?php echo smarty_function_orders(array(),$_smarty_tpl);?>

</div>

<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
