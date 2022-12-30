<?php

class VDb2
{

    private $db;
    // Конструктор
    public function __construct()
    {
        //$this->db = self::getConnection();
    }

    //Соединение с базой
    public static function getConnection()
    {
        // Получаем параметры подключения из файла
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);

        // Устанавливаем соединение
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);

        // Задаем кодировку
        $db->exec("set names utf8");

        return $db;
    }

    /** Пакетный Запрос<br/>
     *
     *
     * Примеры
     * $sqlNomen =  "SELECT 'Nomen' as tableName, Nom.id, Nom.name FROM nomen Nom WHERE (Nom.name LIKE '%" . $vFind . "%') OR (Nom.comment LIKE '%" . $vFind . "%')";
     * $sqlCategory = "SELECT 'Category' as tableName, Cat.id, Cat.name FROM category Cat WHERE (Cat.name LIKE '%" . $vFind . "%')";
     * $sql[] = "CREATE TEMPORARY TABLE vittemp " . $sqlNomen . " UNION ALL " . $sqlCategory;
     * $sql[] = "SELECT * FROM vittemp ORDER BY name";
     * @return array<p></p>
     */
    public static function getSQL($sql = [], $params = '')
    {
        // подключение к базе
        $db = self::getConnection();

        // подстановка текста запроса в коннект
        if (is_array($sql)) {
            foreach ($sql as $sqlElem) {
                $result = $db->query($sqlElem);
            }
        } else {
            $result = $db->prepare($sql);
        };

        // Устанавливаем параметры
        if (is_array($params)) {
            foreach ($params as $key => $value) {
                $result->bindParam($key, $value);
            }
        }
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        $list = [];
        $i = 0;
        while ($row = $result->fetch()) {
            $list[$i] = $row;
            $i++;
        }
        // if (empty($i)) {
        //     $list = false;
        // }
        return $list;
    }


    /** Создаём новую запись в таблицу<br/>
     */
    public static function createbased($tableName, $value)
    {
        $db = self::getConnection();
        $sql = 'INSERT ' . $tableName . self::set($value);
        $result = $db->prepare($sql);
        if ($result->execute()) {
            $lastId = $db->lastInsertId();
            return $lastId;
        }
        return 0;
    }

    /** Создаём новую запись в таблицу<br/>
     */
    public static function create($tableName, $value)
    {
        // Соединение с БД
        $db = self::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT ' . $tableName . self::set($value);
        //self::log($sql);
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        //debug($sql);
        if ($result->execute()) {
            // Если запрос выполнен успешно, возвращаем id добавленной записи
            $lastId = $db->lastInsertId();

            //self::setObmen($tableName, $lastId);

            return $lastId;
        }
        // Иначе возвращаем 0
        return 0;
    }

    //обновляет запись в таблице
    public static function update($tableName, $id, $value)
    {
        //регистрируем для обмена
        self::setObmen($tableName, $id);

        // Соединение с БД
        $db = self::getConnection();

        // Текст запроса к БД
        $sql = 'UPDATE ' . $tableName . self::set($value) . "WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function delete($tableName, $id)
    {
        // Соединение с БД
        $db = self::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM ' . $tableName . " WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /** Устанавливаем переменные в запрос
     */
    public static function set($value)
    {
        $set = '';
        $operator = ',';
        foreach ($value as $column => $val) {
            if (!$set) {
                $set = ' SET ' . $column . '=' . "'" . $val . "' ";
            } else {
                $set .= $operator . " " . $column . '=' . "'" . $val . "' ";
            }
        }

        return $set;
    }

    /** Ведем Логи
     */
    public static function log($param)
    {
        $value['comment'] = $param;
        $value['date'] = VFunc::vTimeNow();
        self::createbased('logs', $value);
    }

    //Регистрация записи для обмена   
    public static function setObmen($tableName, $id)
    {
        if ($tableName == 'obmen') {
            return true;
        };

        //из обмена берем все зарегистрированные ИЗМЕНЁННЫЕ записи таблицы

        $sql = "SELECT * FROM obmen WHERE (tableid = " . $id . " AND tablename = '" . $tableName . "')";
        $fr = self::getSQL($sql);
        //self::log($sql);
        if ($fr) {
            return true;
        };
        //Если не найдено то Регистрируем;

        $vr['tablename'] = $tableName;
        $vr['tableid'] = $id;

        self::createbased('obmen', $vr);

        return true;
    }

    // Выборка всех записей по таблице Изменения для обмена   
    public static function getObmen($tableName)
    {
        $ids = array();
        $arr = array();
        //Db::getConnectionRB();
        //из обмена берем все зарегистрированные ИЗМЕНЁННЫЕ записи таблицы
        $sql = "SELECT id,tableid FROM obmen WHERE tablename = :tablename";
        $obm = self::getSQL($sql, ['tablename' => $tableName]);

        //$obm = R::find('obmen', 'tablename = ?', [$tableName]);

        if ($obm == []) {
            return $ids;
        }
        //забираем только id

        foreach ($obm as $key => $value) {
            $ids[] = $value['tableid'];
            //удаляем записи из обмена
            self::delete('obmen', $value['id']);
        };

        //R::trashAll($obm);

        //Забираем записи из таблицы по выборке
        $sql = "SELECT * FROM " . $tableName . " WHERE id IN (" . implode(',', $ids) . ")";
        $list = self::getSQL($sql);

        //$list = R::find($tableName, 'id IN (' . R::genSlots($ids) . ')', $ids);
        $i = 0;
        foreach ($list as $value) {
            foreach ($value as $key => $value2) {
                $arr[$i][$key] = $value2;
            };
            $i++;
        };
        return $arr;
    }

    //Находим код1с записи
    public static function findCode1C($tableName, $code1c)
    {
        $sql = "SELECT id FROM " . $tableName . ' WHERE (code1c = "' .  $code1c . '")';
        self::log($sql);
        $list = self::getSQL($sql);
        if (empty($list)) {
            return false;
        }
        return $list[0]['id'];
    }

    //берем по коду 1с записи
    public static function getCode1C($tableName, $id)
    {
        $sql = "SELECT code1C FROM " . $tableName . " WHERE (id = " .  $id . ")";
        //self::log($sql);
        $list = self::getSQL($sql);
        if (empty($list)) {
            return false;
        }
        return $list[0]['code1C'];
    }

    //Устанавливаем код1с записи
    public static function setCode1C($table, $id, $code1c)
    {
        $vr['code1c'] = $code1c;
        self::update($table, $id, $vr);
        return true;
    }
}
