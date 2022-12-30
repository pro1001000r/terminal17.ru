<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-21 21:44:09
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Push/view/vView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62b21179468ac6_50966860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31b36144f098841e9945197246751e153f64fa63' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Push/view/vView.tpl',
      1 => 1654743432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b21179468ac6_50966860 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Firebase Cloud Messaging</title>
    <link rel="shortcut icon" href="favicon.png">

    <!-- Import Google Icon Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"><?php echo '</script'; ?>
>
    <style type="text/css">
        #alert,
        #info,
        #delete,
        #notification,
        #massage_row {
            display: none;
        }
    </style>
</head>

<body>
    <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container">
            <h3 class="brand-logo">Firebase Cloud Messaging</h3>
            <ul class="right hide-on-med-and-down desktop-header-links">
                <li><a href="https://github.com/peter-gribanov/serviceworker">GitHub</a></li>
            </ul>
        </div>
    </nav>


    <main class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br>
            <br>
            <div class="card-panel deep-orange darken-1 white-text z-depth-2" id="alert">
                <i class="material-icons left deep-orange-text text-darken-4">warning</i>
                <strong>Error</strong>
                <em id="alert-message"></em>
            </div>
            <div class="card-panel green darken-1 white-text z-depth-2" id="info">
                <i class="material-icons left green-text text-darken-4">info</i>
                <span id="info-message"></span>
            </div>
            <div class="row center">
                <h4 class="header col s12 light">Instance ID Token</h4>
                <p id="token" style="word-break: break-all;"></p>
            </div>
            <div class="row center">
                <button type="button" class="btn-large waves-effect waves-light orange" id="register"><i
                        class="material-icons left">vpn_key</i> Register</button>
                <button type="button" class="btn-large waves-effect waves-light orange" id="delete"><i
                        class="material-icons left">delete</i> Delete Token</button>
            </div>
            <div class="row">
                <form action="" method="post" class="col s12" id="notification">
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="tokenVit" id="tokenVit" value="Токен для отправки" class="validate">
                            <label for="tokenVit">TOKEN</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" name="title" id="title" value="Bubble Nebula" class="validate">
                            <label for="title">Notification title</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" name="body" id="body" value="It's found today at 21:00" class="validate">
                            <label for="body">Notification message</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" name="icon" id="icon"
                                value="https://peter-gribanov.github.io/serviceworker/Bubble-Nebula.jpg"
                                class="validate">
                            <label for="icon">URL to notification icon</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" name="image" id="image"
                                value="https://peter-gribanov.github.io/serviceworker/Bubble-Nebula_big.jpg"
                                class="validate">
                            <label for="image">URL to notification image</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" name="click_action" id="click_action"
                                value="https://www.nasa.gov/feature/goddard/2016/hubble-sees-a-star-inflating-a-giant-bubble"
                                class="validate">
                            <label for="click_action">Target URL for click action</label>
                        </div>
                        <div class="input-field col s12" id="massage_row">
                            <p><strong>Massage id:</strong> <span id="massage_id" style="word-break: break-all;"></span>
                            </p>
                        </div>
                    </div>
                    <button type="submit" class="btn-large waves-effect waves-light orange" id="send"><i
                            class="material-icons left">email</i> Send</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>


    <?php echo '<script'; ?>
 src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://www.gstatic.com/firebasejs/8.10.0/firebase-messaging.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/vMVC/Push/js/app.js"><?php echo '</script'; ?>
>
<?php }
}
