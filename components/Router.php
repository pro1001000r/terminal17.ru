<?php

class Router {

    private $routes;

    public function __construct() {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getURI() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            //            $_SESSION['ВаскURL'] = $_SERVER['HTTP_REFERER'];

            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    /**
     * Метод для обработки запроса
     */
    public function run() {
        // Получаем строку запроса
        $uri = $this->getURI();

        //1. Проверяем наличие такого запроса в массиве маршрутов (routes.php)
        $okrout = false;
        foreach ($this->routes as $uriPattern => $path) {


            // Сравниваем $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)) {

                // Получаем внутренний путь из внешнего согласно правилу.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                // Определить контроллер, action, параметры
                $segments = explode('/', $internalRoute);
                
                //VFunc::Debug($segments);
                
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);
 
                $actionName = 'action' . ucfirst(array_shift($segments));

                $parameters = $segments;

                // Создать объект, вызвать метод (т.е. action)
                $controllerObject = new $controllerName;

                /* Вызываем необходимый метод ($actionName) у определенного 
                 * класса ($controllerObject) с заданными ($parameters) параметрами
                 */
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                // Если метод контроллера успешно вызван, завершаем работу роутера
                if ($result != null) {
                    $okrout = true;
                    break;
                }
            }
        }
        if ($okrout) {
            return true;
        }

        //2. Автороутинг: Разбиение строки на состовляющие Контроллер Экшн и параметры
        if (!empty($uri)) {
            $segments = explode('/', $uri);
                
            $controllerName = array_shift($segments) . 'Controller';
            $controllerName = ucfirst($controllerName);

            $actionName = 'action' . ucfirst(array_shift($segments));

            if ($actionName == 'action'){
               $actionName = 'actionView'; 
            };
            
            $parameters = $segments;

            // Формируем имя и путь к файлу с классом vMVC
            $pathFolder = str_replace("Controller", "", $controllerName);
            $pathFolder = str_replace("Model", "", $pathFolder);
            $path = ROOT . '/vMVC/' . $pathFolder . '/' . $controllerName . '.php';

            // Если такой файл существует, подключаем его
            if (is_file($path)) {
                include_once $path;
            }
            // Создать объект, вызвать метод (т.е. action)




            if (class_exists($controllerName)) {
                
                $controllerObject = new $controllerName;

                /* Вызываем необходимый метод ($actionName) у определенного 
                 * класса ($controllerObject) с заданными ($parameters) параметрами
                 */

                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                // Если метод контроллера успешно вызван, завершаем работу роутера
                if ($result != null) {
                    return true;
                }
            }
        }

        //3. По любому переход на первую страницу

        $controllerName = "StartController";
        $actionName = "actionStart";
        //VFunc::Debug($uri);
        $parameters = array();
        $controllerFile = ROOT . '/vMVC/Start/'
        .'StartController.php';

        include_once($controllerFile);

        $controllerObject = new $controllerName;
        $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
    }

}
