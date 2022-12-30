<?php

function smarty_function_CREDFotoPanel($params, $smarty) {

    if (isset($params['id'])) {
        $smarty->assign('id', $params['id']);
    }

    if (isset($params['table'])) {
        $smarty->assign('table', $params['table']);
        $output = $smarty->fetch(ROOT . "/vAtoms/CREDFotoPanel/CREDFotoPanel.tpl");
    }

    
    return $output;
}
