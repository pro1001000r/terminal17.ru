<?php

function smarty_function_listtask($params, $smarty) {
//debug($params);
    Db::getConnectionRB();

    if (isset($params['id'])) {
        $tasks = R::find('task', 'clients_id = ?', [$params['id']], 'order by data desc');
    } else {
        $tasks = R::findAll('task', 'order by data desc');
    }
//debug($tasks);
    foreach ($tasks as $key => $value) {
        $dlit = VFunc::vTimeBetween($value['data'], $value['dataend']);
        $day = VFunc::vDayAgo($value['data']);
        $dw = VFunc::vWeek($value['data']);
        $tasks[$key]['dopisanie'] = $day . ' (' . $dw . ')';
        $tasks[$key]['dlit'] = $dlit;
    }

    $smarty->assign('tasks', $tasks);

    $output = $smarty->fetch(ROOT . "/vMVC/Clients/view/Listtask.tpl");
    return $output;
}
