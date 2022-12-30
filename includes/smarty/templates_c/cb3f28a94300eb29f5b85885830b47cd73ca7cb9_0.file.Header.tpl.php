<?php
/* Smarty version 3.1.34-dev-7, created on 2022-07-15 09:16:41
  from '/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62d106493e67a0_94161600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb3f28a94300eb29f5b85885830b47cd73ca7cb9' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/Header.tpl',
      1 => 1657216931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d106493e67a0_94161600 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="canonical" href="https://vjone.ru" />

    <link rel="icon" type="image/png" href="/vjlogo.png">

    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
    <meta name="keywords" content="наработки" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['ogurl']->value;?>
">
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['ogimg']->value;?>
">
    <meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    
    <link href="/includes/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/includes/bootstrap/css/bootstrap-grid.css" rel="stylesheet" type="text/css" />
    <link href="/includes/bootstrap/css/bootstrap-reboot.css" rel="stylesheet" type="text/css" />

        <link href="/template/css/VitGlyphicon.css" rel="stylesheet" type="text/css" />
    <link href="/template/css/VitStyles.css" rel="stylesheet" type="text/css" />
    <link href="/template/css/bootstrap-icons.css" rel="stylesheet" type="text/css" />

        <link href="/template/css/font-awesome.css" rel="stylesheet">

    <?php echo $_smarty_tpl->tpl_vars['vStyle']->value;?>


    <style>
        body {
            margin-top: 0px;
        }

        /* для куки */

        .messages_cookies {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: auto;
            overflow: hidden;
            background-color: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            color: #666;
            padding: 15px 0;
            font-size: 12px;
        }

        .messages_cookies-wrp {
            position: relative;
            width: 80%;
            margin: 0 auto;
        }

        .messages_cookies-close {
            position: absolute;
            top: 0;
            bottom: 0;
            right: -20px;
            display: inline-block;
            width: 16px;
            height: 16px;
            margin: auto 0;
            background: url(https://snipp.ru/img/сlose.png) 0 0 no-repeat;
        }
    </style>

    
    
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    <?php echo '</script'; ?>
>

    
            <?php echo '<script'; ?>
 src="/template/js/VitCRED.js" type="text/javascript"><?php echo '</script'; ?>
>

    <meta name="yandex-verification" content="40c7148816407e77" />

    
        <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function() {
                //$("#phone").mask("+7(999)-999-99-99");
                $('[data-toggle="popover"]').popover();

                //  для куки
                $('.messages_cookies-close').click(function() {
                    $('.messages_cookies').hide(100);
                    //document.cookie = "messages_cookies=true; max-age=31556926";
                    return false;
                });
            });
        <?php echo '</script'; ?>
>
    


</head>

<body>

    
        <!-- Yandex.Metrika counter -->
        <?php echo '<script'; ?>
 type="text/javascript">
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k,
            a)
            })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(89438398, "init", {
                clickmap: true,
                trackLinks: true,
                accurateTrackBounce: true,
                webvisor: true
            });
        <?php echo '</script'; ?>
>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/89438398" style="position:absolute; left:-9999px;" alt="" /></div>
        </noscript>
        <!-- /Yandex.Metrika counter -->
    
    
    
    
    <?php if (($_smarty_tpl->tpl_vars['messagescookies']->value == false)) {?>
        <div class="messages_cookies">
            <div class="messages_cookies-wrp">
                <a href="#" class="messages_cookies-close"></a>
                Мы используем cookie-файлы с целью персонализации Ваших сервисов на сайте. Продолжая пользоваться
                сайтом без изменения настроек, Вы даёте согласие на использование Ваших cookie-файлов.
            </div>
        </div>
    <?php }?>

    
<?php }
}
