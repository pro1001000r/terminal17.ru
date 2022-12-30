<?php

/**
 * Класс User - модель для работы с пользователями
 */
class User
{

    /**
     * Регистрация пользователя 
     * @param string $name <p>Имя</p>
     * @param string $email <p>E-mail</p>
     * @param string $password <p>Пароль</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function register($name, $login, $password)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO users (name, login, password) '
            . 'VALUES (:name, :login, :password)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        if ($result->execute()) {
            // Если запрос выполнен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }

    /**
     * Редактирование данных пользователя
     * @param integer $id <p>id пользователя</p>
     * @param string $name <p>Имя</p>
     * @param string $password <p>Пароль</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function edit($id, $name, $password)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE users 
            SET name = :name, password = :password 
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * Проверяем существует ли пользователь с заданными $email и $password
     * @param string $email <p>E-mail</p>
     * @param string $password <p>Пароль</p>
     * @return mixed : integer user id or false
     */
    public static function checkUserData($login, $password)
    {

        //$password = password_hash($password, PASSWORD_DEFAULT);

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM users WHERE login = :login AND password = :password AND active = 1';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();

        // Обращаемся к записи
        $user = $result->fetch();

        if ($user) {

            // Если запись существует, возвращаем id пользователя
            return $user['id'];
        }
        return false;
    }

    /** Делаем проверку на активность пользователя и если что то отключаем
     */
    public static function checkActive()
    {
        if (!isset($_SESSION['user'])) {
            return true;
        };

        if ($_SESSION['user'] == 12) {
            return true;
        };

        $userId = $_SESSION['user'];
        $sql = "SELECT active FROM users WHERE (id = " .  $userId . ")";
        $list = VDb2::getSQL($sql);
        // активность равна 0 - отключаем
        if (empty($list) || empty($list[0]['active'])) {
            self::LogOut();
        }

        return true;
    }

    /** Запоминаем пользователя в Сессии
     * @param integer $userId <p>id пользователя</p>
     */
    public static function auth($userId)
    {
        // Записываем идентификатор пользователя в сессию
        $_SESSION['user'] = $userId;
    }

    /**
     * Возвращает идентификатор пользователя, если он авторизирован.<br/>
     * Иначе возвращет FALSE
     * @return <p>Идентификатор пользователя</p>
     */
    public static function getId()
    {
        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        return false;
    }

    /** Возвращает идентификатор пользователя, если он авторизирован.<br/>
     * Иначе перенаправляет на страницу входа
     * @return <p>Идентификатор пользователя</p>
     */
    public static function checkLogged()
    {
        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /User/Login");
    }

    /**  Проверка на статус Пользователя<br/>
     * @return <p>истина ложь</p>
     */
    public static function isStatusAdmin($status = 'A')
    {

        if (isset($_SESSION['user'])) {
            $id = $_SESSION['user'];
        } else {
            header("Location: /User/Login");
        }

        $db = Db::getConnection();
        $sql = 'SELECT status FROM users WHERE id = :id';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

        // Обращаемся к записи
        $user = $result->fetch();

        if ($user) {
            // Если запись существует, возвращаем id пользователя
            if (($user['status'] == $status) || ($user['status'] == 'S')) {
                return $user['status'];
            };
        };
        //header("Location: /User/Login");
        return false;
    }

    /**
     * Проверяет является ли пользователь гостем
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }


    /**
     * Проверяет email
     * @param string $email <p>E-mail</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет не занят ли email другим пользователем
     * @param type $email <p>E-mail</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function checkEmailExists($email)
    {
        // Соединение с БД        
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT COUNT(*) FROM users WHERE login = :email';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;
    }

    /**
     * Проверяет не занят ли email другим пользователем
     * @param type $email <p>E-mail</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function checkLoginExists($login)
    {
        // Соединение с БД        
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT COUNT(*) FROM users WHERE login = :login';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;
    }

    /**
     * Возвращает пользователя с указанным id
     * @param integer $id <p>id пользователя</p>
     * @return array <p>Массив с информацией о пользователе</p>
     */
    public static function getUserById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM users WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    public static function getSessionUserName()
    {
        $id = $_SESSION['user'];
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT name FROM users WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        $user = $result->fetch();

        return $user["name"];
    }

    // Определяем пользователя по токену куки и браузеру(если скопировали куки) для автоматического входа на страницу
    public static function getIdFromTokencookie()
    {

        // debug($_SESSION['user']);

        //debug($_COOKIE);

        if (!isset($_SESSION['user'])) {                //нет юзера
            if (isset($_COOKIE["tokencookie"])) {       //но есть куки

                $vbrowser = VFunc::useragent();

                $vp['cookie'] = $_COOKIE["tokencookie"];
                //$vp['useragent'] = $vbrowser;

                $sql = 'SELECT * FROM tokens WHERE (cookie = :cookie AND useragent = :useragent) ';
                $sql = 'SELECT * FROM tokens WHERE (cookie = :cookie) ';

                $id = VDb::getSQL($sql, $vp);
                if (isset($id) && !empty($id)) {
                    //debug($id);                       // устанавливаем сессию
                    $_SESSION['user'] = $id[0]['users_id'];
                } else {
                    setcookie("tokencookie", "", -1, "/");
                }
            }
        }
    }

    // генерируем токен куки для автоматического входа на страницу
    // и записываем в базу
    public static function generateTokenCookie()
    {
        $tokencookie = strval(VFunc::vTimeNow());
        $tokencookie .= strval(rand(1, 500));
        $tokencookie = password_hash($tokencookie, PASSWORD_DEFAULT);

        $vbrowser = VFunc::useragent();

        $vp['cookie'] = $tokencookie;
        $vp['users_id'] = $_SESSION['user'];
        $vp['useragent'] = $vbrowser;

        VDb::create('tokens', $vp);

        setcookie('tokencookie', $tokencookie, time() + 60 * 60 * 24 * 365 * 10, "/");
    }

    // проверяем и делаем запись куки на всякий случай
    public static function checkTokenCookie()
    {
        if (isset($_SESSION['user']) && (isset($_COOKIE["tokencookie"]))) {

            $users_id    = $_SESSION['user'];
            $tokencookie = $_COOKIE["tokencookie"];

            $vbrowser = VFunc::useragent();

            $vp['cookie'] = $tokencookie;
            //$vp['useragent'] = $vbrowser;
            $sql = "SELECT * FROM tokens WHERE cookie = :cookie";
            //todo сделать отбор по юзергейту
            //$sql = "SELECT * FROM tokens WHERE useragent = :useragent";
            //$sql = 'SELECT * FROM tokens WHERE ((cookie = '.$vp['cookie'].') AND (useragent = :'.$vp['useragent'].'))';
            $zapis = VDb::getSQL($sql, $vp);
            //$zapis = VDb::getSQL($sql);

            //debug($zapis);
            if (isset($zapis) && !empty($zapis)) {
                if ($zapis[0]['users_id'] <> $users_id) {

                    $vp1['users_id'] = $users_id;
                    $vp1['useragent'] = $vbrowser;
                    VDb::updateById('tokens', $zapis[0]['id'], $vp1);
                }
            } else {

                $vp1['cookie'] = $tokencookie;
                $vp1['useragent'] = $vbrowser;
                $vp1['users_id'] = $users_id;
                VDb::create('tokens', $vp1);
            }
        }
    }

    // Выходим из всего!!!
    // 
    public static function LogOut()
    {
        // Удаляем информацию из базы
        $vp['cookie'] = $_COOKIE["tokencookie"];
        $sql = 'DELETE FROM tokens WHERE cookie = :cookie';
        VDb::getSQL($sql, $vp);

        // Удаляем информацию о пользователе из сессии куках и корзине
        unset($_SESSION["user"]);

        unset($_SESSION["order"]);

        setcookie("tokencookie", "", -1, "/");
    }
}
