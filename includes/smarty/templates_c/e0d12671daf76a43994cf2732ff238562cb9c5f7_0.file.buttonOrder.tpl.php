<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-15 18:17:25
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Cart/plugins/buttonOrder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62a9bfc5164cf1_28725816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0d12671daf76a43994cf2732ff238562cb9c5f7' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Cart/plugins/buttonOrder.tpl',
      1 => 1655285974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a9bfc5164cf1_28725816 (Smarty_Internal_Template $_smarty_tpl) {
?>   <button class="btn btn-primary" id="nomen<?php echo $_smarty_tpl->tpl_vars['idNomen']->value;?>
" name="nomen<?php echo $_smarty_tpl->tpl_vars['idNomen']->value;?>
" onclick="vSetNomen(<?php echo $_smarty_tpl->tpl_vars['idNomen']->value;?>
)">
       <span class="bi bi-cart-plus-fill" id="nomenspan<?php echo $_smarty_tpl->tpl_vars['idNomen']->value;?>
" name="nomenspan<?php echo $_smarty_tpl->tpl_vars['idNomen']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['buttonName']->value;?>
</span>
   </button>

   
       <?php echo '<script'; ?>
 type="text/javascript">
           function vSetNomen(id) {
               var fd = new FormData();
               fd.append('vSetNomen', 1);
               fd.append('nomenid', id);

               vAjaxsOrder(fd);
           }

           function vAjaxsOrder(fd) {
               $.ajax({
                   url: '/Cart/Ajax/',
                   data: fd,
                   processData: false,
                   contentType: false,
                   type: 'POST',
                   success: function(data) {
                       editNomenButton(data);
                   }
               });
           }
           //Показываем на кнопке количество товаров в корзине
           function editNomenButton(msg) {
               var str = JSON.parse(msg);
               $('#nomenspan' + str.id).text('в корзине ' + str.count);
           };
       <?php echo '</script'; ?>
>
    <?php }
}
