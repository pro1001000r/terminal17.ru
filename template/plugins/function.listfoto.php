<?php

function smarty_function_listfoto($params, $smarty) {

    $listFoto = VDb::getAll('fotos');
    
    $smarty->assign('listFoto', $listFoto);
    $output = $smarty->fetch(ROOT . "/template/layouts/ListFoto.tpl");
    return $output;
}
