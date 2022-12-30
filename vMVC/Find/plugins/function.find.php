<?php

function smarty_function_find($params, $smarty) {

    if (isset($params['id'])) {
        $smarty->assign('id', $params['id']);
    }
    $q = '';
    if (isset($_GET['q']) && (!empty($_GET['q']))) {
        $q = $_GET['q'];
    }
        
    $smarty->assign('q', $q);

    $output = $smarty->fetch(ROOT . "/vMVC/Find/plugins/Find.tpl");
    return $output;
}
