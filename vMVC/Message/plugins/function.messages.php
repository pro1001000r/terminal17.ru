<?php

function smarty_function_messages($params, $smarty)
{
    
    $table = $params['table'];

    // $pageCount = 5;

    // $vpage = new Pagenation($table, $pageCount);
    // $vp['vpage'] = $vpage;

    // $list = VDb::getAll($table, '', '', 'id desc', $vpage->limitText);

    // $vp['list'] = array_reverse($list);

    // VSmarty::setSmartyParams($vp, $smarty);

    $output = MessageController::MessageList($params['id']);

    return $output;
}
