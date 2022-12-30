<?php


/** Получаем список для переменной таблица_id
* Это пример плагина: {select users = $item.user_id} <br><br/>
* @return string<p></p>
*/
function smarty_function_selecttree($params, $smarty) {

    if (empty($params)) {
        return '';
    }
    
    foreach ($params as $key => $value) {

        if ($key == 'id') {
            $v_id = '_' . $value;
        } elseif ($key == 'table') {
            $table_v = $value;
        }elseif ($key == 'value') {
            $selectid = $value;
        }
    }
    
    //$name = VDb::getNameById($table_v, $value);
    
    $list = VDb::getNameAll($table_v);
    
    $selecttree = New VTree($table_v,$selectid);
    $selecttree->outTreeForSelect(0,0);
    //debug($selecttree->tree);
    
    $table_id = "parent_id";

    $smarty->assign('selectlist', $list);
    $smarty->assign('table_v', $table_v);
    $smarty->assign('selectid', $selectid);
    $smarty->assign('table_id', $table_id);
    $smarty->assign('selecttree',$selecttree->tree);
    
    $output = $smarty->fetch(ROOT . "/vAtoms/SelectTree/SelectTree.tpl");
    return $output;
    
}
