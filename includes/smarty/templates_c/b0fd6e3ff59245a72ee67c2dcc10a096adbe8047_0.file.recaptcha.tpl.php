<?php
/* Smarty version 3.1.34-dev-7, created on 2022-11-24 09:08:42
  from '/var/www/u1845303/data/www/terminal17.ru/vAtoms/Recaptcha/recaptcha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_637ed22af27012_43881594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0fd6e3ff59245a72ee67c2dcc10a096adbe8047' => 
    array (
      0 => '/var/www/u1845303/data/www/terminal17.ru/vAtoms/Recaptcha/recaptcha.tpl',
      1 => 1655550916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637ed22af27012_43881594 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js"><?php echo '</script'; ?>
>


<div class="g-recaptcha" data-sitekey="6Lfms0YgAAAAADKlLXQ8tAxPYPTvBHqsNB7mg1K1" data-size="compact"></div>


    <?php echo '<script'; ?>
>
        $('#form').submit(function() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                alert('Вы не прошли проверку CAPTCHA должным образом');
                return false;
            }
        });
    <?php echo '</script'; ?>
>
<?php }
}
