<?php

function smarty_function_CREDPanel($params, $smarty)
{

    if (isset($params['id'])) {
        $smarty->assign('id', $params['id']);
    }

    $output = $smarty->fetch(ROOT . "/vAtoms/CREDPanel/CREDPanel.tpl");
    return $output;
}
