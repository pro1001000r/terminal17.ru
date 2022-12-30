<?php

function smarty_function_CardLink($params, $smarty) {

    if (isset($params['id'])) {
        $smarty->assign('id', $params['id']);
    }

    $item = VDb::getById('linksite',$params['id']);
    $smarty->assign('item', $item);
   
    $output = $smarty->fetch(ROOT . "/vMVC/Linksite/plugins/CardLink.tpl");
    return $output;
}
