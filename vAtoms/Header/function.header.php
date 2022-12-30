<?php

function smarty_function_header($params, $smarty) {
    
    $ogtitle = "Терминал Кызыл";
    $ogdescription = "Терминал Кызыл";
    $ogimg = "http://terminal17.ru/terminalLogo.png";

    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $url = explode('?', $url);
    $ogurl = $url[0];

    $vStyle = '';
    
    if (isset($params)) {
        if (isset($params['title'])) {
            $ogtitle = $params['title'];
        }
        if (isset($params['description'])) {
            $ogdescription = $params['description'];
        }
        if (isset($params['img'])) {
            $ogimg = 'https://' . $_SERVER['HTTP_HOST'] . $params['img'];
        }
        
        if (isset($params['vStyle'])) {
            $vStyle = $params['vStyle'];
        }
        
    }


    //сообщение о том что мы используем куки
    $messagescookies = false;
    if (isset($_COOKIE['messagescookies'])) {
        $messagescookies = $_COOKIE['messagescookies'];
    };
    setcookie('messagescookies', true, time() + 60 * 60 * 24 * 365 * 10, "/");

    //При открытиии любой страницы АВТОМАТОМАТИЧЕСКИ заходим на сайт!!!!!
    User::getIdFromTokencookie();

    //При открытиии любой страницы Проверяем активность и Если что ВЫРУБАЕМ!!!!
    User::checkActive();

    $smarty->assign('messagescookies', $messagescookies);
    $smarty->assign('title', $ogtitle);
    $smarty->assign('description', $ogdescription);
    $smarty->assign('ogimg', $ogimg);
    $smarty->assign('ogurl', $ogurl);
    
    $smarty->assign('vStyle', $vStyle);

    $output = $smarty->fetch(ROOT . "/vAtoms/Header/Header.tpl");
    return $output;
}
