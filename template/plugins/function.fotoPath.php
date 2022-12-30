<?php

function smarty_function_fotoPath($params, $smarty) {

    if (empty($params)) {
        return '/template/images/no-image.png';
    } elseif (empty($params['foto'])) {
        return '/template/images/no-image.png';
    } else {
        return $params['foto'];
    }
}
