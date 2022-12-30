<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-16 06:57:51
  from '/var/www/u1663726/data/www/vjone.ru/vAtoms/Find/Find.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62aaaa3fa5ab25_15190431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bae5ef684507ac0072b64630bc632ed61b4f55eb' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vAtoms/Find/Find.tpl',
      1 => 1653288751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62aaaa3fa5ab25_15190431 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="/find/view/" method="get">
    <div class="form-inline">
        <input name = "q" id = "qFind" type="text" class="form-control vit-outline-0" placeholder="Поиск..." value="<?php echo $_smarty_tpl->tpl_vars['q']->value;?>
" style="width: 100px; display: none;" ohchange = "$('#btnFind').click()">
        <div class="input-group-append">
            <button type="submit" id="btnFind" class="btn vit-outline-0 vit-color-0" hidden="true"><span class="bi bi-search"></span></button>
            
            <button type="button" class="btn vit-color-0" onclick = "FindClick()"><span class="bi bi-search h3"></span></button>
        </div>
    </div>
</form>


    <?php echo '<script'; ?>
>
        function FindClick(){
           $('#qFind').slideToggle(300);
        }
    <?php echo '</script'; ?>
>
<?php }
}
