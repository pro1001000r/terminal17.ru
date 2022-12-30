<?php

function smarty_function_fotoView($params, $smarty) {

    if (empty($params)) {
        return '';
    } elseif (empty($params['foto'])) {
        if (isset($params['v'])) {
            $foto = '/template/images/no-image.png';
        } else {
            return '';
        }
    } else {
        $foto = $params['foto'];
    }

    $smarty->assign("foto", $foto);
    $output = $smarty->fetch(ROOT . "/vAtoms/Foto/fotoView.tpl");
    return $output;
}
