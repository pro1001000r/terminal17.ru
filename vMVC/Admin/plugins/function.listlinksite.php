<?php

function smarty_function_listlinksite($params, $smarty) {
    
    Db::getConnectionRB();

    $links = R::findAll('linksite');

    $smarty->assign('listLinkSite', $links);

    $output = $smarty->fetch(ROOT . "/vMVC/Admin/view/ListLinkSites.tpl");
    return $output;
}
