<?php

/**
 * Description of VitSmarty
 *
 * @author Якурнов Виталий 
 * Здесь подключаем блоки смарти как функции
 */
class VSmarty
{

    //инициализируем Smarty
    public static function Run($path = '')
    {

        $smarty = new Smarty();

        if (!isset($path) || empty($path) || ($path == "/template/layouts/")) {
            $path = ROOT . "/template/layouts/";
        } else {
            $path = ucfirst($path);
            //$plug[] = ROOT . '/vMVC/' . $path . '/plugins/';
            $path = ROOT . '/vMVC/' . $path . '/view/';
        }

        $smarty->caching = false; //выключаем кэширование
        //Включаем кэширование страницы(по умолчанию на один час)
        //$smarty->setCaching(Smarty::CACHING_LIFETIME_SAVED);
        //Время кэширования
        //$smarty->setCacheLifetime(1);

        $smarty->debugging = false;

        $smarty->template_dir = $path;
        $smarty->compile_dir = SMARTY_DIR . 'templates_c/';
        $smarty->config_dir = SMARTY_DIR . 'configs/';
        $smarty->cache_dir = SMARTY_DIR . 'cache/';

        $plug[] = ROOT . '/template/plugins/';
        
        $pathPlug = '/vAtoms/';  //подключаем атомарки!!!

        $dir = opendir(ROOT . $pathPlug);
        while ($file = readdir($dir)) {

            if (is_dir(ROOT . $pathPlug . $file) && $file != '.' && $file != '..') {

                $plug[] = ROOT . $pathPlug . $file .'/';
            }
        }

        $pathPlug = '/vMVC/';  //подключаем сами странички!!!

        $dir = opendir(ROOT . $pathPlug);
        while ($file = readdir($dir)) {

            if (is_dir(ROOT . $pathPlug . $file.'/plugins') && $file != '.' && $file != '..') {

                $plug[] = ROOT . $pathPlug . $file .'/plugins/';
            }
        }

        // $plug[] = ROOT . '/template/vAtoms/Button/';
        // $plug[] = ROOT . '/template/vAtoms/ButtonOrder/';
        // $plug[] = ROOT . '/template/vAtoms/Select/';
        // $plug[] = ROOT . '/template/vAtoms/Pagenation/';
        // $plug[] = ROOT . '/template/vAtoms/CREDPanel/';
        // $plug[] = ROOT . '/template/vAtoms/Find/';
        // $plug[] = ROOT . '/template/vAtoms/Foto/';
        // $plug[] = ROOT . '/template/vAtoms/Card/';
        // $plug[] = ROOT . '/template/vAtoms/Push/';
        // $plug[] = ROOT . '/template/vAtoms/Recaptcha/';

        $smarty->setPluginsDir($plug);

        return $smarty;
    }

    // заполняем Для Смарти значения переданные из контроллера
    public static function setSmartyParams($params = [],$smarty) {
        if (isset($params)) {
            foreach ($params as $key => $value) {
                $smarty->assign($key, $value);
            }
        }
        return true;
    }

    public static function display($nameTpl,$smarty) {
        $smarty->display($nameTpl);
        return true;
    }

    public static function fetch($nameTpl,$smarty) {
        $smarty->fetch($nameTpl);
        return true;
    }
}
