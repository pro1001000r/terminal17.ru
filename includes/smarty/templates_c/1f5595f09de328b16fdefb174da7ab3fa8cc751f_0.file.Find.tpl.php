<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-16 06:16:47
  from '/var/www/u1663726/data/www/vjone.ru/vAtoms/Find/Find.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62aaa09f641236_73252598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f5595f09de328b16fdefb174da7ab3fa8cc751f' => 
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
function content_62aaa09f641236_73252598 (Smarty_Internal_Template $_smarty_tpl) {
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
