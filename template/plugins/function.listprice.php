<?php

function smarty_function_listprice($params, $smarty) {
    
    $vpage = new Pagenation('nomen',12);

    $listprice = VDb::getAll('nomen','','','id desc',$vpage->limitText);

    $smarty->assign('listprice', $listprice);
    $smarty->assign('vpage', $vpage);

    $output = $smarty->fetch(ROOT . "/template/layouts/ListPrice.tpl");
    return $output;
}
