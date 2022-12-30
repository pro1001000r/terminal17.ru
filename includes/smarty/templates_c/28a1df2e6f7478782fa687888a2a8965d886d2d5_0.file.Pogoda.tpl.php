<?php
/* Smarty version 3.1.34-dev-7, created on 2022-11-25 10:04:28
  from '/var/www/u1845303/data/www/terminal17.ru/template/layouts/Pogoda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_638030bce9ffc1_84941243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28a1df2e6f7478782fa687888a2a8965d886d2d5' => 
    array (
      0 => '/var/www/u1845303/data/www/terminal17.ru/template/layouts/Pogoda.tpl',
      1 => 1636882958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638030bce9ffc1_84941243 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class = "row">
    <div class = "col-10 offset-1" style="box-shadow: 0 0 10px rgba(0,0,0,0.5)">
        <a class="nuipogoda-iframe-informer" data-nuipogoda="informer4" 
           href="https://nuipogoda.ru" 
           style="height: 263px;box-shadow: 0 0 5px #999;">НУ И ПОГОДА</a>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</div>   
<br>

<?php echo '<script'; ?>
>
    (function (a, f, g) {
        var e = a.createElement(f);
        e.async = 1;
        e.src = g;
        a = a.getElementsByTagName(f)[0];
        a.parentNode.insertBefore(e, a)
    })
            (document, 'script', '//nuipogoda.ru/informer/nuipogoda.js');
<?php echo '</script'; ?>
><?php }
}
