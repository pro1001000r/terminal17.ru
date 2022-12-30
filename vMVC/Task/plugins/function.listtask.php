<?php

function smarty_function_listtask($params, $smarty) {
    
    Db::getConnectionRB();

    $vpage = new Pagenation('task',10);
    
    $tasks = R::findAll('task','order by data desc '.$vpage->limitText);
    
    foreach ($tasks as $key => $value) {
        $dlit = VFunc::vTimeBetween($value['data'],$value['dataend']);
        $day = VFunc::vDayAgo($value['data']);
        $dw = VFunc::vWeek($value['data']);
      $tasks[$key]['dopisanie'] = $day.' ('.$dw.')';  
      $tasks[$key]['dlit'] = $dlit;
      
    }

    $smarty->assign('tasks', $tasks);
    $smarty->assign('pagenation', $vpage->getHtml());

    $output = $smarty->fetch(ROOT . "/vMVC/Cabinet/plugins/Listtask.tpl");
    return $output;
}
