<?php

function smarty_function_Card($params, $smarty)
{

    if (empty($params)) {
        return '';
    }

    $id = $params['id'];

    $card = VDb::getById('nomen', $id);

    //    $fileTemp = ROOT . '/upload/images/qrtmp.png';
    //    $str = 'https://vjone.ru/Nomen/view/'.$item['id'];
    //    $str = 'https://vjone.ru/Nomen/List/'; 
    //    QRcode::png($str, $fileTemp);

    $card['qr'] = '/upload/images/qrtmp.png';

    $smarty->assign("item", $card);
    $smarty->assign('usersGuest', User::isGuest());

    //$smarty->assign("item", $item);
    $output = $smarty->fetch(ROOT . "/vAtoms/Card/CardView.tpl");
    return $output;
}

// if (empty($params)) {
//     return '';
// }

// $item = $params['item'];

// $card = VDb::getById('nomen', $item['id']);

// //    $fileTemp = ROOT . '/upload/images/qrtmp.png';
// //    $str = 'https://vjone.ru/Nomen/view/'.$item['id'];
// //    $str = 'https://vjone.ru/Nomen/List/'; 
// //    QRcode::png($str, $fileTemp);

// $card['qr'] = '/upload/images/qrtmp.png';

// $smarty->assign("item", $card);
// $smarty->assign('usersGuest', User::isGuest());
// $output = $smarty->fetch(ROOT . "/template/vAtoms/Card/CardView.tpl");
// return $output;
// }