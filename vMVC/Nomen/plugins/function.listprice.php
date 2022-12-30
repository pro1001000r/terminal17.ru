<?php

function smarty_function_listprice($params, $smarty) {
    $listprice = VDb::getAll('nomen');

    $smarty->assign('listprice', $listprice);

    $output = $smarty->fetch(ROOT . "/template/layouts/ListPrice.tpl");
    return $output;
}
