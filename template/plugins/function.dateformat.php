<?php

// Преобразование в красивую дату
// Это пример плагина: {getname table = users id = $item.user_id} <br>

function smarty_function_dateformat($params, $smarty) {

    if (empty($params)) {
        return '';
    }
    $date = $params['d'];
            
    $dateRus = VFunc::formatDateRus($date);
    return $dateRus;

}
