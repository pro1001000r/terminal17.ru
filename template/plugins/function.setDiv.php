<?php

function smarty_function_setDiv($params, $smarty) {

    if (empty($params)) {
        return '';
    }
    $vstyle = '';
    foreach ($params as $key => $value) {
        if ($key == 'bgimg') {
            if ($value == '') {
                return '';
            }
            $vstyle = "style = 'background: url(" . $value . "); background-size: contain; background-attachment: fixed;'";
        } else {
           return ''; 
        }
    }
    return $vstyle;
}
