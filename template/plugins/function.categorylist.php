<?php

function smarty_function_categorylist($params, $smarty) {

    $listFoto = VDb::getAll('category');

    $smarty->assign('listFoto', $listFoto);
    $output = $smarty->fetch(ROOT . "/template/layouts/CategoryList.tpl");
    return $output;
}
