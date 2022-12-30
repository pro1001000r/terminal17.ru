<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-15 18:45:38
  from '/var/www/u1663726/data/www/vjone.ru/vAtoms/Push/pushview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62a9c6624a19f8_48366530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58b5ea755a246b150996d3cb70162bb659d896dd' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vAtoms/Push/pushview.tpl',
      1 => 1654852624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a9c6624a19f8_48366530 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card vShadow">
    <div class=" card-body text-center">


        <form action="" method="post" class="col s12" id="FormVit">
            <p class="h5">Управление Push уведомлениями</p>
            <p>
                Push нужны для получения сообщений о состоянии заказов<br>
                (чтобы не отслеживать вручную)
            </p>
            <p class=" small" id="vbrowser"><?php echo $_smarty_tpl->tpl_vars['vbrowser']->value;?>
</p>
            <p class=" small" id="tokencookie">Токен Cookie не получен</p>
            <p class=" small" id="token"> Токен Push не получен</p>
            <p id="message"></p>
            <button type="button" class="btn btn-info" id="register">Зарегистрировать Token</button>
            <button type="button" class="btn btn-danger" id="delete">Удалить Token</button>
            <button type="button" class="btn btn-primary" id="send">Отправить тестовое уведомление</button>
        </form>
    </div>
</div>


    <?php echo '<script'; ?>
 src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://www.gstatic.com/firebasejs/8.10.0/firebase-messaging.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/vAtoms/Push/pushVit.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php }
}
