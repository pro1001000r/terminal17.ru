<?php

function smarty_function_fotoViewCarousel($params, $smarty) {

    if (empty($params)) {
        return '';
    }

    $table = $params['table'];
    $id = $params['id'];

    $edit = false;
    if (isset($params['edit']) && $params['edit'] == true) {
        $edit = true;
        $smarty->assign("tablename", $table);
        $smarty->assign("tableid", $id);
    }

    $listFoto = VFoto::getImage($table, $id);

    if (empty($listFoto) && $edit) {
        $listFoto[0]['foto'] = "/template/images/no-image.png";
        $listFoto[0]['foto64'] = "/template/images/no-image.png";
        $listFoto[0]['tableid'] = $id;
        $listFoto[0]['tablename'] = $table;
        $listFoto[0]['tableid'] = 0;
        $listFoto[0]['id'] = 0;
    }

    //debug($listFoto);

    $smarty->assign("listFoto", $listFoto);
    $smarty->assign("edit", $edit);

    $output = $smarty->fetch(ROOT . "/vAtoms/FotoViewCarousel/fotoViewCarousel.tpl");
    return $output;
}
