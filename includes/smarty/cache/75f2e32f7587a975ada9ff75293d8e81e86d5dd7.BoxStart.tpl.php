<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-21 10:24:12
  from 'C:\wamp64\www\BoxSite\views\start\BoxStart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e75eb4c0bd961_05171537',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'c561291c38fbb0250ece07105765d30bd6018f41' => 
    array (
      0 => 'C:\\wamp64\\www\\BoxSite\\views\\start\\BoxStart.tpl',
      1 => 1584786246,
      2 => 'file',
    ),
    '3979583c55b8682c1a8e2993b76dc2aa861a5f80' => 
    array (
      0 => 'C:\\wamp64\\www\\BoxSite\\views\\start\\header.tpl',
      1 => 1584784924,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 1,
),true)) {
function content_5e75eb4c0bd961_05171537 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>"Боксы в москве</title>
        <link rel="canonical" href="https://BoxSite.ru"/>
        <link rel="icon" sizes="16x16" href="/favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
        <meta name="description" content="Заказ складов, боксов 
              в Москве и Подмосковье. Звоните прямо сейчас: +7(926)872-96-41"/>
        <meta name="keywords" content="Боксы, склад, аренда складов"/>
        <meta name="yandex-verification" content="282f647cf8821362" />

        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <link href="/template/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/template/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="/template/css/ThemaVit.css" rel="stylesheet" type="text/css"/>


    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#Vit-navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/news/">"Боксы в аренду"</a>
                    <a class="navbar-brand" href="tel:+79778981601"><span class="glyphicon glyphicon-phone-alt"></span> +7 (977) 898-16-01</a>
                </div>
                <!--                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Каталог <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Компьтеры</a></li> 
                                            <li><a href="#">Планшеты</a></li> 
                                            <li><a href="#">Телевизоры</a></li> 
                                            <li class="divider"></li> 
                                            <li><a href="#">Акция!!!</a></li> 
                                        </ul>
                                    </li> 
                                </ul>-->
                <div class="collapse navbar-collapse" id="Vit-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-book"></span>
                                Каталог услуг <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>                      
                                    <a href="/#R1">
                                        <span class="glyphicon glyphicon-check"></span> 
                                        Аренда
                                    </a>
                                </li> 
                                <li>
                                    <a href="/#R2">
                                        <span class="glyphicon glyphicon-check"></span> 
                                        Интернет-Магазин
                                    </a>
                                </li> 
                                <li class="divider"></li> 
                                <li><a href="#">Акция!!!</a></li> 
                            </ul>
                        </li> 
                    </ul>
                    <!--                    <form class="navbar-form navbar-left">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Поиск">
                                            </div>
                                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button> 
                                        </form>-->
                    <ul class="nav navbar-nav navbar-right">
                        <!--<li><a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> Корзина</a></li>--> 
                        <?php echo '<?php ';?>
if (User::isGuest()): <?php echo '?>';?>
                                        
                        <li><a href="/user/login/"><i class="glyphicon glyphicon-log-in"></i> Вход</a></li>
                        <?php echo '<?php ';?>
else: <?php echo '?>';?>

                        <!--<li><a href="/NewsAdd/"><span class="glyphicon glyphicon-plus"></span> Новая статья</a></li>-->
                        <li>
                            <a href="/cabinet/">
                                <span class="glyphicon glyphicon-user"></span> <?php echo '<?php ';?>
echo User::getSessionUserName(); <?php echo '?>';?>

                            </a>
                        </li>
                        <li>
                            <a href="/user/logout/">
                                <span class="glyphicon glyphicon-log-out"></span> Выход
                            </a>
                        </li>
                        <?php echo '<?php ';?>
endif; <?php echo '?>';?>
 
                        <!-- <li><a href="/news/">Новости</a></li> -->
                        <!--<li><a href="tel:+79268729641"><span class="glyphicon glyphicon-phone-alt"></span> +7 (926) 872-96-41</a></li>--> 

                    </ul>
                </div>
            </div>
        </nav>
        <a class="btn btn-lg fixedbut" href="tel:+79778981601"><span class="glyphicon glyphicon-phone-alt"></span></a>

        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="vit-background-image">
                        <div class="vit-background-opacity">
                            <h1 class="text-center">
                                <b>"Сдача боксов"</b><br>
                                Сергей - описание НОВОЕ
                            </h1>
                            <div class="text-right">
                                <blockquote><small>Лозунг найдем где хранить</small></blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="/template/js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="/template/js/Vitjavascript.js" type="text/javascript"></script>
        <script src="/template/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>

<?php }
}
