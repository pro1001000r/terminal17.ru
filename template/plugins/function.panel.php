<?php

// {Panel TableName = 'News'}
function smarty_function_panel($params, $smarty) {
//    if (empty($params)) {
//        return '';
//    }
//
//    if (!isset($params['TableName'])) {
//        return '';
//    }

    $userIsGuest = User::isGuest();
    if (!$userIsGuest) {
        $userName = VDb::getById('users', $_SESSION['user'], 'name');
        $smarty->assign('userName', $userName);
    }

    //$smarty->assign('TableName', $params['TableName']);
    $output = $smarty->fetch(ROOT . "/template/layouts/Panel.tpl");
    return $output;
}
