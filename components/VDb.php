<?php

/*
  Место для разработки
 */

class VDb
{

    const VITCONST = 1;

    public $col;

    // Конструктор
    public function __construct()
    {
    }

    public static function getColumnNames($tableName)
    {
        $db = Db::getConnection();

        $sql = "SHOW COLUMNS FROM $tableName";
        $result = $db->prepare($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        $list = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $list[$i] = $row;
            $i++;
        }
        return $list;
    }

    //Получаем поля таблицы
    public static function getFields($tableName)
    {
        $infoTable = self::getColumnNames($tableName);

        $fields = [];

        foreach ($infoTable as $key) {
            $typeField = $key['Type'];
            $nameField = $key['Field'];

            $fields[$nameField]['name'] = $nameField;

            switch ($typeField) {
                case 'int(11)': {
                        if (strpos($nameField, '_id')) {
                            $fields[$nameField]['value'] = 0;
                            $fields[$nameField]['type'] = 'sid';
                            $fields[$nameField]['table'] = str_replace("_id", "", $nameField);
                        } else {
                            $fields[$nameField]['value'] = 0;
                            $fields[$nameField]['type'] = 'i11';
                        }
                    };
                    break;
                case 'int(11) unsigned': {
                        if (strpos($nameField, '_id')) {
                            $fields[$nameField]['value'] = 0;
                            $fields[$nameField]['type'] = 'sid';
                            $fields[$nameField]['table'] = str_replace("_id", "", $nameField);
                        } else {
                            $fields[$nameField]['value'] = 0;
                            $fields[$nameField]['type'] = 'i11';
                        }
                    };
                    break;
                case 'varchar(256)': {
                        if ($nameField == 'foto') {
                            $fields[$nameField]['value'] = '';
                            $fields[$nameField]['type'] = 'f';
                        } else {
                            $fields[$nameField]['value'] = '';
                            $fields[$nameField]['type'] = 'v256';
                        }
                    };
                    break;
                case 'text': {
                        $fields[$nameField]['value'] = '';
                        $fields[$nameField]['type'] = 't';
                    };
                    break;
                case 'timestamp': {
                        $fields[$nameField]['value'] = date("Y-m-d H:i:s");
                        $fields[$nameField]['type'] = 'd';
                    };
                    break;
                case 'datetime': {
                        $fields[$nameField]['value'] = date("Y-m-d H:i:s");
                        $fields[$nameField]['type'] = 'd';
                    };
                    break;
                case 'decimal(15,2)': {
                        $fields[$nameField]['value'] = 0;
                        $fields[$nameField]['type'] = 'd152';
                    };
                    break;
                case 'decimal(10,2)': {
                        $fields[$nameField]['value'] = 0;
                        $fields[$nameField]['type'] = 'd152';
                    };
                    break;
                default: {
                        $fields[$nameField]['value'] = '';
                        $fields[$nameField]['type'] = 'v256';
                    };
                    break;
            }
            if ($nameField == 'foto' || $nameField == 'image') {
                $fields[$nameField]['value'] = '';
                $fields[$nameField]['type'] = 'f';
            }
        }

        return $fields;
    }

    public static function log($param)
    {
        $value['comment'] = $param;
        $value['date'] = VFunc::vTimeNow();
        self::create('logs', $value);
    }

    // Выборка данных таблицы по произвольному запросу   
    //       Пример:     $sql = "SELECT "
    //                . "N.id as Nid,"
    //                . "N.name as Nname,"
    //                . "N.text as Ntext,"
    //                . "N.data as Ndata,"
    //                . "N.user_id as user_id,"
    //                . "U.name as Nname "
    //                . "FROM news N LEFT JOIN users U "
    //                . "ON N.user_id = U.id "
    //                . " WHERE N.id = ?";
    //
    //        $params[] = 6;  По порядку 
    public static function getSQL($sql = '', $params = '')
    {
        // подключение к базе
        $db = Db::getConnection();

        // подстановка текста запроса в коннект
        $result = $db->prepare($sql);
        // подстановка параметров в запрос
        $vp = $sql;
        if (is_array($params)) {
            foreach ($params as $key => $value) {
                $result->bindParam($key, $value);
                $vp .= '-Параметр: ' . $value;
            }
        }
        self::log($vp);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        $list = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $list[$i] = $row;
            $i++;
        }
        return $list;
    }


    // $sqlNomen =  "SELECT 'Nomen' as tableName, Nom.id, Nom.name FROM nomen Nom WHERE (Nom.name LIKE '%" . $vFind . "%') OR (Nom.comment LIKE '%" . $vFind . "%')";

    // $sqlCategory = "SELECT 'Category' as tableName, Cat.id, Cat.name FROM category Cat WHERE (Cat.name LIKE '%" . $vFind . "%')";

    // $sql[] = "CREATE TEMPORARY TABLE vittemp " . $sqlNomen . " UNION ALL " . $sqlCategory;
    // $sql[] = "SELECT * FROM vittemp ORDER BY name";
    public static function getSQLPackage($sql = [])
    {
        // подключение к базе
        $db = Db::getConnection();

        // подстановка текста запроса в коннект
        if (is_array($sql)) {
            foreach ($sql as $sqlElem) {
                $result = $db->query($sqlElem);
                self::log($sqlElem);
            }
        }
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        $list = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $list[$i] = $row;
            $i++;
        }
        return $list;
    }

    // Выборка всех данных таблицы   
    public static function getAll($tableName, $column = '', $whers = '', $orders = 'id desc', $limits = '')
    {

        $db = Db::getConnection();

        $dbSql = new Db();
        if (!empty($orders)) {
            $dbSql->order_by_text($orders);
        }
        if (!empty($whers)) {
            $dbSql->where_text($whers);
        }
        if (!empty($limits)) {
            $dbSql->limitText($limits);
        }
        $sql = $dbSql->select($tableName, $column);

        $result = $db->prepare($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        $list = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $list[$i] = $row;
            $i++;
        }
        return $list;
    }

    // Выборка всех записей по таблице Изменения для обмена   
    public static function getObmen($tableName)
    {
        $ids = array();
        $arr = array();
        //Db::getConnectionRB();
        //из обмена берем все зарегистрированные ИЗМЕНЁННЫЕ записи таблицы
        $obm = R::find('obmen', 'tablename = ?', [$tableName]);

        if ($obm == []) {
            return $ids;
        }
        //забираем только id

        foreach ($obm as $key => $value) {
            $ids[] = $value['tableid'];
        };
        //удаляем записи из обмена
        R::trashAll($obm);

        //Забираем записи из таблицы по выборке 
        $list = R::find($tableName, 'id IN (' . R::genSlots($ids) . ')', $ids);
        $i = 0;
        foreach ($list as $value) {
            foreach ($value as $key => $value2) {
                $arr[$i][$key] = $value2;
            };
            $i++;
        };
        return $arr;
    }

    //Регистрация записи для обмена   
    public static function setObmen($tableName, $id)
    {

        Db::getConnectionRB();
        //из обмена берем все зарегистрированные ИЗМЕНЁННЫЕ записи таблицы

        $fr = R::find(
            'obmen',
            'tableid = :id AND tablename = :tablename',
            [
                ':tablename' => $tableName,
                ':id' => $id
            ]
        );
        if ($fr) {
            return true;
        };
        //Если не найдено то Регистрируем;
        $vr = R::dispense('obmen');

        $vr->tablename = $tableName;
        $vr->tableid = $id;

        R::store($vr);

        return true;
    }

    // Выдает список всех строк по одной статье 
    public static function getById($tableName, $id, $column = '')
    {
        $db = Db::getConnection();

        $dbSql = new Db();
        $dbSql->where_text('id = :id');
        $sql = $dbSql->select($tableName, $column);

        //        echo "<pre>";
        //        print_r($sql);
        //        echo "</pre>";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        while ($row = $result->fetch()) {
            if (empty($column)) {
                return $row;
            }
            return $row[$column];
        }
        return 0;
    }

    // Выборка всех данных таблицы   
    public static function getNameAll($tableName)
    {

        $db = Db::getConnection();

        $dbSql = new Db();
        $dbSql->order_by_text('name');
        $sql = $dbSql->select($tableName);

        $result = $db->prepare($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        // $list = array();
        // $list[0]['id'] = '0';
        // $list[0]['name'] = '';

        $i = 0;
        while ($row = $result->fetch()) {
            $list[$i]['id'] = $row['id'];
            $list[$i]['name'] = $row['name'];
            $i++;
        }
        return $list;
    }

    // Выдает список всех строк по одной статье 
    public static function getNameById($tableName, $id)
    {
        $db = Db::getConnection();

        $dbSql = new Db();
        $dbSql->where_text('id = :id');
        $sql = $dbSql->select($tableName);

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        while ($row = $result->fetch()) {
            return $row['name'];
        }
        return '';
    }

    // Выборка количества данных таблицы   
    public static function getCount($tableName, $where = '')
    {

        $db = Db::getConnection();

        $sql = "SELECT COUNT(*) FROM " . $tableName . ' ' . $where;

        $result = $db->query($sql);
        $countNum = $result->fetchColumn();

        return $countNum;
    }

    // Создаём новую запись в таблицу
    // 
    public static function create($tableName, $value)
    {
        // Соединение с БД
        $db = Db::getConnection();

        $dbSql = new Db();
        $dbSql->set($value);
        $sql = $dbSql->insert($tableName);

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        //debug($sql);
        if ($result->execute()) {
            // Если запрос выполнен успешно, возвращаем id добавленной записи
            $lastId = $db->lastInsertId();

            //self::setObmen($tableName, $lastId); //регистрируем для обмена

            return $lastId;
        }
        // Иначе возвращаем 0
        return 0;
    }

    //обновляет запись в таблице
    public static function updateById($tableName, $id, $value)
    {
        // Соединение с БД
        $db = Db::getConnection();

        //регистрируем для обмена
        self::setObmen($tableName, $id);

        // Текст запроса к БД
        $dbSql = new Db();
        $dbSql->set($value);
        $dbSql->where_text('id = :id');
        $sql = $dbSql->update($tableName);
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    //обновляет все записи в таблице
    public static function updateAll($tableName, $value)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $dbSql = new Db();
        $dbSql->set($value);
        $sql = $dbSql->update($tableName);

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        return $result->execute();
    }

    public static function deleteById($tableName, $id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $dbSql = new Db();
        $dbSql->where_text('id = :id');
        $sql = $dbSql->delete($tableName);

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function deleteAll($tableName)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $dbSql = new Db();
        $sql = $dbSql->delete($tableName);

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        return $result->execute();
    }

    // public static function deleteFotoById($path_foto) {
    //     //удаляем сам файл непосредственно
    //     if (isset($path_foto)) {
    //         $filename = ROOT . $foto['path_foto'];
    //         unlink($filename);
    //     }
    // }

    // // создание новой таблицы в базе mysql
    // public static function createNewTable() {
    //     $sql = "CREATE TABLE IF NOT EXISTS " . DBNAME . ".?"
    //             . "( `id` INT(11) NOT NULL AUTO_INCREMENT ,"
    //             . "`data` TIMESTAMP NOT NULL ,"
    //             . "`name` VARCHAR(256) NOT NULL ,"
    //             . "`text` TEXT NULL ,"
    //             . "PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    //     $params[] = $this->tableName;
    //     VDb::getSQL($sql, $params);
    //     return true;
    // }

    // // создание новой таблицы в базе mysql
    // public static function createNewFieldVARCHAR($field) {
    //     $sql = "ALTER TABLE " . DBNAME . ".? ADD ? VARCHAR(256) NOT NULL;";
    //     $params[] = $this->tableName;
    //     $params[] = $field;
    //     VDb::getSQL($sql, $params);
    //     return true;
    // }

    public static function createTableRB($field)
    {
        return true;
    }
}
