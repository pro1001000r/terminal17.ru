<?php

/**
 * Контроллер UserController
 */
class UserController
{

    /**
     * Action для страницы "Регистрация"
     */
    public function actionRegister()
    {

        //User::checkLogged();

        // Переменные для формы
        $name = false;
        $login = false;
        $password = false;
        $password2 = false;
        $result = false;

        $smarty = VSmarty::Run('User');

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена 
            // Получаем данные из формы
            $name = $_POST['name'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];

            // Флаг ошибок
            $errors = false;

            // Валидация полей
            if (!VFunc::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!VFunc::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            if (User::checkLoginExists($login)) {
                $errors[] = 'Такой login уже используется';
            }
            if ($password <> $password2) {
                $errors[] = 'Пароли не совпадают';
            }

            // капча>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
            $error = true;
            $secret = '6Lfms0YgAAAAALP9Yz0UhK0PCFJ8qZmBn6dLKLS0';
            if (!empty($_POST['g-recaptcha-response'])) {
                $out = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
                $out = json_decode($out);
                if ($out->success == true) {
                    $error = false;
                }
            }
            if ($error) {
                $errors[] = 'Ошибка заполнения капчи.';
            }
            //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

            if ($errors == false) {
                // Если ошибок нет
                // Регистрируем пользователя

                //Хэшируем пароль
                //$password = password_hash($password, PASSWORD_DEFAULT);

                $userId = User::register($name, $login, $password);
                User::auth($userId);

                // Записываем ТокенКуки
                if (!isset($_COOKIE["tokencookie"])) {
                    User::generateTokenCookie();
                } else {
                    // проверка на уже существующий токен куки
                    User::checkTokenCookie();
                }

                header("Location: /Cabinet/");
            }
            $smarty->assign('errors', $errors);
        }
        $smarty->assign('login', $login);
        $smarty->assign('password', $password);
        $smarty->assign('password2', $password2);
        $smarty->assign('name', $name);

        // Подключаем вид
        //require_once(ROOT . '/views/user/Login.php');
        $smarty->display('Register.tpl');
        return true;
    }

    /**
     * Action для страницы "Вход на сайт"
     */
    public function actionLogin()
    {
        // Переменные для формы
        $login = false;
        $password = false;
        $errors = false;
        // Обработка формы
        if (isset($_POST['submit'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];

            // Флаг ошибок
            // Проверяем существует ли пользователь
            $userId = User::checkUserData($login, $password);

            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // ВАЖНО!!! Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);

                // Записываем ТокенКуки
                if (!isset($_COOKIE["tokencookie"])) {
                    User::generateTokenCookie();
                } else {
                    // проверка на уже существующий токен куки
                    User::checkTokenCookie();
                }


                // Перенаправляем администратора в закрытую часть - Админка
                $statA = User::isStatusAdmin();
                // if ($statA) {
                //     header("Location: /Admin/View/");
                // } else {
                    // header("Location: /Cabinet");
                // }

                // Перенаправляем пользователя в закрытую часть - кабинет 
                header("Location: /Cabinet");
            }
        }

        $smarty = VSmarty::Run('User');
        $smarty->assign('login', $login);
        $smarty->assign('password', $password);
        $smarty->assign('errors', $errors);
        $smarty->display('Login.tpl');
        return true;
    }

    /**
     * Удаляем данные о пользователе из сессии
     */
    public function actionLogout()
    {
        User::LogOut();

        // Перенаправляем пользователя на главную страницу
        header("Location: /");
    }
}
