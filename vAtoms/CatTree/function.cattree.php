<?php

function smarty_function_cattree($params, $smarty) {

    $selecttree = New VTree('category');
    $selecttree->tree = $selecttree->outTree(0,0);
       
    $smarty->assign('selecttree',$selecttree->tree);
    
    $output = $smarty->fetch(ROOT . "/vAtoms/CatTree/CatTree.tpl");
    return $output;
    
}
