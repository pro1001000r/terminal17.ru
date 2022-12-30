<?php

function smarty_function_pagenationNomen($params, $smarty) {
    
    $vp = $params['vp'];
    
    if (empty($vp)){ //Ecли пустые параметры то не выводим
        return'';
    }
    
    //debug($vp);
    $size_page = $vp->size_page;
    $page = $vp->page;
    $total_pages = $vp->total_pages;
    
    $uri = $_SERVER['REQUEST_URI'];
    
    $smarty->assign('uri',$uri);
    $smarty->assign('page', $page);
    $smarty->assign('total_pages', $total_pages);
    
    if ($total_pages == 1) {
        $output = '';
    } else {
        $output = $smarty->fetch(ROOT . "/vMVC/Nomen/plugins/pagenation.tpl");
        //$output = 'Вывод проба';
    };

    return $output;
}
