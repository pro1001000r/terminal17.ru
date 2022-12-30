<?php

function smarty_function_buttonOrder($params, $smarty) {

    if (empty($params)) {               //нет параметров вылетаем
        return '';
    }

    if (isset($params['id'])) {
        $id= $params['id'];
    }
    
    $idCount = VOrder::getCountNomen($id);
    if($idCount==0){
        $buttonName = 'в корзину';
    }else{
        $buttonName = 'в корзинe '.$idCount;
    }

    $smarty->assign("idNomen", $id);
    $smarty->assign("buttonName", $buttonName);

    $output = $smarty->fetch(ROOT . "/vMVC/Cart/plugins/buttonOrder.tpl");
    return $output;
}
