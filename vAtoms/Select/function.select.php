<?php

// Получаем список для переменной таблица_id
// Это пример плагина: {select users = $item.user_id} <br>

function smarty_function_select($params, $smarty) {

    if (empty($params)) {
        return 'нет данных';
    }
    $v_id = '_id';
    $valstr = '';
    $table_v = '';
    foreach ($params as $key => $value) {

        if ($key == 'id') {
            $v_id = '_' . $value;
        } elseif ($key == 'table') {
            $table_v = $value;
        } elseif ($key == 'valstr') {
            $valstr = $value['func'] . "('" . $value['data'] . "','" . $value['id'] . "',this)";
        } else {
            $name = VDb::getNameById($table_v, $value);
            $list = VDb::getNameAll($table_v);
            $smarty->assign('selectname', $name);
            $smarty->assign('selectlist', $list);
            $smarty->assign('selectid', $value);
        }
    }

    $table_id = $table_v . $v_id;
    $smarty->assign('table_id', $table_id);
    $smarty->assign('valstr', $valstr);

    $output = $smarty->fetch(ROOT . "/vAtoms/Select/Select.tpl");
    return $output;
}
