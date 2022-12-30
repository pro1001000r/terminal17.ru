<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-18 15:21:17
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Find/plugins/Find.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62adc33d2dbe72_67492062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca1e7025583f47af7fe6dcd9d77737ba5e5d19e4' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Find/plugins/Find.tpl',
      1 => 1655543538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62adc33d2dbe72_67492062 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="/find/view/" method="post">
<div class="btn-group">
    <input name="qFind" id="qFind" type="text" class="input-group-text bg-white vit-outline-0" placeholder="Поиск..."
        value="<?php echo $_smarty_tpl->tpl_vars['q']->value;?>
" style="width: 100%; display: none;" ohchange="$('#btnFind').click()">

    <button type="button" class="btn" onclick="FindClick()"><span class="bi bi-search h3 vit-color-0"></span></button>

    <button type="submit" id="btnFind" hidden="true"></button>
</div>
</form>


    <?php echo '<script'; ?>
>
        function FindClick() {
            $('#qFind').slideToggle(300);
            $('#qFind').focus();
            if ($('#qFind').val() != '') {
                $('#btnFind').click();
                var q = $('#qFind').val();
                $('#qFind').val('');
            }
        }     
    <?php echo '</script'; ?>
>
<?php }
}
