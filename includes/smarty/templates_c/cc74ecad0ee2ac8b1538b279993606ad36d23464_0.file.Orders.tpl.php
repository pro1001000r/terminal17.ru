<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-15 15:23:11
  from '/var/www/u1663726/data/www/vjone.ru/vAtoms/Orders/Orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62a996ef406809_01306980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc74ecad0ee2ac8b1538b279993606ad36d23464' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vAtoms/Orders/Orders.tpl',
      1 => 1655192542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a996ef406809_01306980 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="text-center h3">
    Ваши заказы
</div>
<div class="row">
    <div class="col">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderPast']->value, 'itemPast');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemPast']->value) {
?>
            <div class="card my-2 mx-2 vShadow">
                Заказ <?php echo $_smarty_tpl->tpl_vars['itemPast']->value['id'];?>
 <?php echo $_smarty_tpl->tpl_vars['itemPast']->value['date'];?>
 тел:<?php echo $_smarty_tpl->tpl_vars['itemPast']->value['phone'];?>
 <b><?php echo $_smarty_tpl->tpl_vars['itemPast']->value['statusname'];?>
</b>
                <div class="small">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['itemPast']->value['prods'], 'itemProds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemProds']->value) {
?>
                        Товар <?php echo $_smarty_tpl->tpl_vars['itemProds']->value->id;?>
 <?php echo $_smarty_tpl->tpl_vars['itemProds']->value->code1c;?>
 <b>"<?php echo $_smarty_tpl->tpl_vars['itemProds']->value->name;?>
"</b> цена: <b><?php echo $_smarty_tpl->tpl_vars['itemProds']->value->price;?>
</b>
                        количество: <?php echo $_smarty_tpl->tpl_vars['itemProds']->value->count;?>
 сумма: <b><?php echo $_smarty_tpl->tpl_vars['itemProds']->value->sum;?>
</b>
                        <br>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    Сумма заказа: <b><?php echo $_smarty_tpl->tpl_vars['itemPast']->value['summa'];?>
 р.</b>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}
