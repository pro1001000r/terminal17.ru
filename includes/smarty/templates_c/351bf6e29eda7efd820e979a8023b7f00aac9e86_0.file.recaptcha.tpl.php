<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-18 22:15:25
  from '/var/www/u1663726/data/www/vjone.ru/vAtoms/Recaptcha/recaptcha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62adec0d7b5fe8_68463396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '351bf6e29eda7efd820e979a8023b7f00aac9e86' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vAtoms/Recaptcha/recaptcha.tpl',
      1 => 1655565315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62adec0d7b5fe8_68463396 (Smarty_Internal_Template $_smarty_tpl) {
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
