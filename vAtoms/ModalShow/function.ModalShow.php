<?php

function smarty_function_ModalShow($params, $smarty)
{
        if (empty($params)) {               //нет параметров вылетаем
                return '';
        }

        $idModal = 'vitModal';
        if (isset($params['idModal'])) {
                $idModal .= $params['idModal'];
        }

        $name = 'Модальное окно';
        if (isset($params['name'])) {
                $name = $params['name'];
        }
       
        $smarty->assign("idModal", $idModal);
        $smarty->assign("name", $name);

        $output = $smarty->fetch(ROOT . "/vAtoms/Modal/ModalShow.tpl");
        return $output;
}
