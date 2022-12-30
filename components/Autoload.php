<?php

spl_autoload_register(function ($class_name) {

    // 1. Проход по Основным папкам***************************************************************

    //Массив папок, в которых могут находиться необходимые классы
    $array_paths = array(
        '/components/',
        '/includes/'
    );
    // Проходим по массиву папок
    foreach ($array_paths as $path) {

        // Формируем имя и путь к файлу с классом
        $path = ROOT . $path . $class_name . '.php';

        // Если такой файл существует, подключаем его
        if (is_file($path)) {
            include_once $path;
        }
    }

    // 2. Проход по vAtoms папкам***************************************************************

    $pathvAtoms = ROOT . '/vAtoms/';  //подключаем атомарки!!!

    $dir = opendir($pathvAtoms);
    while ($file = readdir($dir)) {

        if (is_dir($pathvAtoms . $file) && $file != '.' && $file != '..') {

            // Формируем имя и путь к файлу с классом
            $path = $pathvAtoms. $file . '/'. $class_name . '.php';

            // Если такой файл существует, подключаем его
            if (is_file($path)) {
                include_once $path;
            }
        }
    }

    $pathvAtoms = ROOT . '/vMVC/';  //подключаем основные папки!!!

    $dir = opendir($pathvAtoms);
    while ($file = readdir($dir)) {

        if (is_dir($pathvAtoms . $file) && $file != '.' && $file != '..') {

            // Формируем имя и путь к файлу с классом
            $path = $pathvAtoms. $file . '/'. $class_name . '.php';

            // Если такой файл существует, подключаем его
            if (is_file($path)) {
                include_once $path;
            }
        }
    }

    // 3. Проход по VMVC папкам***************************************************************

    // Формируем имя и путь к файлу с классом vMVC
    $pathFolder = str_replace("Controller", "", $class_name);
    $pathFolder = str_replace("Model", "", $pathFolder);
    $path = ROOT . '/vMVC/' . $pathFolder . '/' . $class_name . '.php';

    // Если такой файл существует, подключаем его
    if (is_file($path)) {
        include_once $path;
    }
});

