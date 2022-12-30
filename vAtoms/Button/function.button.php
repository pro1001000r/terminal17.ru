<?php

//плагин для создания кнопки по умолчанию
// параметры: name - наименование кнопки (по умолчанию её путь href)
//            href - href кнопки (по умолчанию формирует /путь/List)
//            icon - иконка кнопки (по умолчанию bi-)
//            mode - режим вида кнопки (по умолчанию её путь href)
//Пример:     {button name = $userName href = "/Cabinet/" icon = 'bi-person-check-fill'}
function smarty_function_button($params, $smarty)
{

    if (empty($params)) {               //нет параметров вылетаем
        return '';
    }
    $name ='';
    $icon = 'bi bi-folder2-open';       //иконка по умолчанию
    $mode = "submit";                   //режим по умолчанию
    $freeParam = '';                    //свободные параметры
    $comment = '';                      //всплывающая подсказка 

    if (isset($params['href'])) {
        $href = $params['href'];
        //путь формируется по наличию слэша
        if ((strpos($href, '/') === false) && (strpos($href, 'javascript') === false) && (strpos($href, 'tel:') === false)) {
            $href = '/' . $href . '/List/';
        }
        $name = $href; //вместо имени путь по умолчанию
        $mode = "href";
        $smarty->assign("href", $href);
    }
   
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


    if (isset($params['onclick'])) {
        $onclick = $params['onclick'];
        $smarty->assign("onclick", $onclick);
        $mode = "onclick";
    }

    $class = 'h3';
    if (isset($params['class'])) {
        $class = $params['class'];
    }
    $class = $icon . " ". $class ;

    $classbtn = '';
    if (isset($params['classbtn'])) {
        $classbtn = $params['classbtn'];
    }

    if (isset($params['freeParam'])) {
        $freeParam = $params['freeParam'];
    }

    

    if (isset($params['name'])) {
        $name = $params['name'];
    }

    if (isset($params['comment'])) {
        $comment = $params['comment'];
    }
    
    if (isset($params['mode'])) {
        $mode = $params['mode'];
    }

    $smarty->assign("name", $name);
    $smarty->assign("classbtn", $classbtn);
    $smarty->assign("class", $class);
    $smarty->assign("mode", $mode);
    $smarty->assign("freeParam", $freeParam);
    $smarty->assign("comment", $comment);

    $output = $smarty->fetch(ROOT . "/vAtoms/Button/button.tpl");
    return $output;
}
