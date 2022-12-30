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
        
        $scroll = '';
        if (isset($params['scroll'])) {
                $scroll = " modal-dialog-scrollable";
        }

        $name = 'Модальное окно';
        if (isset($params['name'])) {
                $name = $params['name'];
        }

        $icon = 'bi bi-folder2-open';
        if (isset($params['icon'])) {
                $icon = $params['icon'];
                if (strpos($icon, 'glyphicon')) {
                    $icon = 'glyphicon ' . $params['icon'];
                } elseif(strpos($icon, 'bi-')) {
                    $icon = 'bi ' . $params['icon'];
                } elseif(strpos($icon, 'icon-')) {
                    $icon = $params['icon'];           
                }
            }
        
        
        $classbtn = '';
        if (isset($params['classbtn'])) {
                $classbtn = $params['classbtn'];
        }

        $class = 'h3';
        if (isset($params['class'])) {
                $class = $params['class'];
        }
        $class = $icon . " " . $class;

        $comment = ''; 
        if (isset($params['comment'])) {
                $comment = $params['comment'];
        }
        
        $smarty->assign("classbtn", $classbtn);
        $smarty->assign("class", $class);
        $smarty->assign("comment", $comment);

        $smarty->assign("idModal", $idModal);
        $smarty->assign("name", $name);
        $smarty->assign("scroll", $scroll);

        $output = $smarty->fetch(ROOT . "/vAtoms/Modal/ModalShow.tpl");
        return $output;
}
