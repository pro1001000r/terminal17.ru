<?php

function smarty_function_listnews($params, $smarty)
{
    $listNews = VDb::getAll('news','','','data desc');
    
    $smarty->assign('listNews', $listNews);

    $output = $smarty->fetch(ROOT."/template/layouts/ListNews.tpl");
        return $output;
}
