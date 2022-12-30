<?php

function smarty_function_StrVit($params, $smarty)
{

    if (empty($params)) {
        return '';
    }

    $id = $params['id'];

    $card = VDb::getById('nomen', $id);

    //QRcode::png($str, $fileTemp);

    //$card['qr'] = '/upload/images/qrtmp.png';

    $smarty->assign("item", $card);
    $smarty->assign('usersGuest', User::isGuest());

    //$smarty->assign("item", $item);
    $output = $smarty->fetch(ROOT . "/vAtoms/StrVit/StrVitView.tpl");
    return $output;
}