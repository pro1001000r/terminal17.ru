<?php

function smarty_function_sqllist($params, $smarty) {

    if (!User::isStatusAdmin("S")) {
        return '';
    };
    Db::getConnectionRB();
    $tablesName = R::inspect();
    $tablesAll = [];
    foreach ($tablesName as $value) {
        $fields = R::inspect($value);
        foreach ($fields as $key => $value1) {
            $tablesAll[$value][$key] = $value1;
        };
    };
    //debug($tablesAll);
    $smarty = VSmarty::Run('Develop');
    $smarty->assign("tablesAll", $tablesAll);
    
    $output = $smarty->fetch(ROOT . "/template/layouts/SqlList.tpl");
    return $output;
}
