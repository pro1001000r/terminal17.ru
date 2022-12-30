<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>{$title}</title>
    <link rel="canonical" href="https://vjone.ru" />

    <link rel="icon" type="image/png" href="/vjlogo.png">

    <meta name="description" content="{$description}" />
    <meta name="keywords" content="наработки" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:url" content="{$ogurl}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{$title}">
    <meta property="og:image" content="{$ogimg}">
    <meta property="og:description" content="{$description}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    {*bootstrap3
        <link href="/includes/bootstrap3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/includes/bootstrap3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>*}

    <link href="/includes/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/includes/bootstrap/css/bootstrap-grid.css" rel="stylesheet" type="text/css" />
    <link href="/includes/bootstrap/css/bootstrap-reboot.css" rel="stylesheet" type="text/css" />

    {* Пользовательские настройки *}
    <link href="/template/css/VitGlyphicon.css" rel="stylesheet" type="text/css" />
    <link href="/template/css/VitStyles.css" rel="stylesheet" type="text/css" />
    <link href="/template/css/bootstrap-icons.css" rel="stylesheet" type="text/css" />

    {* <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet"> *}
    <link href="/template/css/font-awesome.css" rel="stylesheet">

    {$vStyle}

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

    {*bootstrap3

        <script src="/includes/bootstrap3/js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="/includes/bootstrap3/js/bootstrap.min.js" type="text/javascript"></script>*}

    {* <script src="/includes/bootstrap/js/jquery-3.6.0.min.js" type="text/javascript"></script> *}

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    {*<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>*}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>

    {*<script src="/includes/bootstrap/js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="/includes/bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="/includes/bootstrap/js/bootstrap.js" type="text/javascript"></script>*}

    {* Пользовательские настройки *}
    {*<script src="/template/js/Vitjavascript.js" type="text/javascript"></script>
        <script src="/template/js/jquery.maskedinput.js" type="text/javascript"></script>*}
    <script src="/template/js/VitCRED.js" type="text/javascript"></script>

    <meta name="yandex-verification" content="40c7148816407e77" />

    {literal}
        <script type="text/javascript">
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
        </script>
    {/literal}


</head>
{*<body oncontextmenu="return(false);">*}

<body>

    {literal}
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
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
        </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/89438398" style="position:absolute; left:-9999px;" alt="" /></div>
        </noscript>
        <!-- /Yandex.Metrika counter -->
    {/literal}
    
    {* <a id="BtnUp" class="btn btn-lg fixedbut" href="#"><span class="glyphicon glyphicon-chevron-up"></span></a> *}

    {* <video autoplay loop muted class="bgvideo" id="bgvideo">
        <source src="/upload/video/abstract.mp4" type="video/mp4">
        </source>
    </video> *}

    {if ($messagescookies == false)}
        <div class="messages_cookies">
            <div class="messages_cookies-wrp">
                <a href="#" class="messages_cookies-close"></a>
                Мы используем cookie-файлы с целью персонализации Ваших сервисов на сайте. Продолжая пользоваться
                сайтом без изменения настроек, Вы даёте согласие на использование Ваших cookie-файлов.
            </div>
        </div>
    {/if}

    {* <?php if (empty($_COOKIE['messages_cookies'])): ?>

    <?php endif; ?> *}

{*<a class="btn fixedbutcat" href="#" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
    Ссылка с помощью атрибута href
    </a>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-body">
    {cattree}46546
    </div>
    </div>*}