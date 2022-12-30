<?php
/* Smarty version 3.1.34-dev-7, created on 2022-11-24 09:08:42
  from '/var/www/u1845303/data/www/terminal17.ru/template/layouts/Mail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_637ed22af24d42_29775070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd91007c863f559e546176c6a7e1ced6aa47d87a' => 
    array (
      0 => '/var/www/u1845303/data/www/terminal17.ru/template/layouts/Mail.tpl',
      1 => 1654559908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637ed22af24d42_29775070 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1845303/data/www/terminal17.ru/vAtoms/Recaptcha/function.recaptcha.php','function'=>'smarty_function_recaptcha',),));
echo '<script'; ?>
 src="/components/bootstrap/js/jquery-3.4.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/template/js/VitVoice.js" type="text/javascript"><?php echo '</script'; ?>
>

<div class="row">
    <div class="col-10 offset-1">

        <p class='h3 vit-color-0'>По вопросам обращайтесь:</p>
        <form method="post" id="form" action="/componentsVit/VMail.php">

            <div class="form-group">
                <label for="phone" class="col-xs-3 col-form-label text-left">Телефон:</label>

                                <input type="tel" id="phone" name="phone" maxlength="30" class="form-control"
                    placeholder="+7(___)-___-__-__">
            </div>

            <div class="form-group">
                <label for="message" class="col-xs-3 col-form-label text-left">Кратко:</label>
                <textarea id="message" rows="7" cols="50" class="form-control" placeholder="Краткое описание"
                    name="message"></textarea>
            </div>
            <div class="form-group">
                <?php echo smarty_function_recaptcha(array(),$_smarty_tpl);?>

            </div>

            <div class="form-group">
                <button type="submit" name="submit" class="btn vit-color-0 vit-outline-0">
                    <span class="glyphicon glyphicon-send"></span> Отправить
                </button>
                <button type="button" name="submit1" class="btn vit-color-0 vit-outline-0"
                    onclick="recognizeVit('message')">
                    <span class="bi bi-mic-fill"></span>
                </button>
                <button type="button" name="submit2" class="btn vit-color-0 vit-outline-0" onclick="speak('message')">
                    <span class="glyphicon glyphicon-volume-up"></span>
                </button>
                <br>
            </div>
            <p class="small">
                Нажимая на кнопку "Отправить", вы даете согласие
                на обработку персональных данных и соглашаетесь c
                <a href="/confidence/" target="_blank">политикой конфиденциальности</a>
            </p>
        </form>
    </div>
</div><?php }
}
