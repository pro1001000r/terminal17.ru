<?php

// Получаем наименование для переменной таблица_id
// Это пример плагина: {getname table = users id = $item.user_id} <br>

function smarty_function_getname($params, $smarty) {

    if (empty($params)) {
        return '';
    }
    $name = VDb::getNameById($params['table'], $params['id']);
    return $name;

}
