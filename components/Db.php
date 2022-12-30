<?php

/**
 * Класс Db
 * Компонент для работы с базой данных
 */
class Db {

    /**
     * Устанавливает соединение с базой данных
     * @return \PDO <p>Объект класса PDO для работы с БД</p>
     */
    private $where;
    private $select = '*';
    private $limit;
    private $order_by;
    private $query;
    private $set;

    public static function getConnection() {
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

    public static function getConnectionRB() {
        
        require (ROOT . '/includes/rb.php');

//        if (class_exists('R')) {
//           return true; 
//        }
        // Получаем параметры подключения из файла
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);

        // Устанавливаем соединение
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        R::setup($dsn, $params['user'], $params['password']);
        
        if (!R::testConnection()) {
            exit('Нет соединения с базой данных');
        }
        
        // Задаем кодировку
        R::exec("set names utf8");

        date_default_timezone_set('Asia/Krasnoyarsk');
        return true;
    }

    // Запрос 
    function select($table, $column = '') {
        if (!empty($column)) {
            $column = trim($column);
            $column = explode(',', $column);

            if (is_array($column)) {
                if ($this->select == "*") {
                    $this->select = "";
                }
                foreach ($column as $value) {
                    if (!$this->select) {
                        $this->select = $value;
                    } else {
                        $this->select .= ", " . $value;
                    }
                }
            } else {
                $this->select = $column;
            }
        }
        $query = "SELECT $this->select FROM $table $this->where $this->order_by $this->limit";
        return $query;
    }

    // Добаление к запросу условия 
    function where($key, $compare = '=') {
        $operator = 'AND';
        if (is_array($key)) {
            foreach ($key as $column => $value) {
                if (!$this->where) {
                    $this->where = $column . $compare . "'" . $value . "' ";
                } else {
                    $this->where .= $operator . " " . $column . $compare . "'" . $value . "' ";
                }
            }
        } else {
            $key = explode(',', $key);
            if (!$this->where) {
                $this->where = $key[0] . $compare . "'" . $key[1] . "' ";
            } else {
                $this->where .= $operator . " " . $key[0] . $compare . "'" . $key[1] . "' ";
            }
        }

        $this->where = ' WHERE ' . $this->where;
        return $this;
    }

    // Добаление к запросу условия(произвольно) 
    function where_text($text) {
        $operator = 'AND';
        if (!$this->where) {
            $this->where = $text;
        } else {
            $this->where .= $operator . " " . $text;
        }
        $this->where = ' WHERE ' . $this->where;
        return $this;
    }

    // Добаление к запросу лимита произвольно
    function order_by_text($text) {
        if (!$this->order_by) {
            $this->order_by = ' ORDER BY ' . $text;
        } else {
            $this->order_by .= ', ' . $text;
        }
    }

    // Добаление к запросу Сортировки
    function order_by($key) {
        if (is_array($key)) {
            foreach ($key as $column => $value) {
                if (!$this->order_by) {
                    $this->order_by = ' ORDER BY ' . $column . ' ' . $value;
                } else {
                    $this->order_by .= ', ' . $column . ' ' . $value;
                }
            }
        } else {
            if (!$this->order_by) {
                $this->order_by = ' ORDER BY ' . $key;
            } else {
                $this->order_by .= ', ' . $key;
            }
        }
        return $this;
    }

    // Добаление к запросу лимита
    function limit($start, $count) {
        $this->limit = ' LIMIT ' . $start . ',' . $count;
        return $this;
    }

    // Добаление к запросу лимита
    function limitText($limits) {
        $this->limit = $limits;
        return $this;
    }

    function search($column, $search) {
        $operator = 'AND';
        $search = strtr($search, array(" " => " +"));
        $search = '+' . $search;
        $w = 'MATCH(' . $column . ") AGAINST('" . $search . "' IN BOOLEAN MODE)";
        if (!$this->where) {
            $this->where = $w;
        } else {
            $this->where .= $operator . " " . $w;
        }
        return $this;
    }

    // Запрос на добавление записи
    function insert($table) {
        $query = 'INSERT ' . $table . $this->set;
        $this->exit_function();
        return $query;
    }

    // Запрос на обновление записи(ей)
    function update($table) {
        $query = 'UPDATE ' . $table . $this->set . $this->where;
        $this->exit_function();
        return $query;
    }

    // Запрос на удаление записи(ей)
    function delete($table) {
        $query = 'DELETE FROM ' . $table . $this->where;
        $this->exit_function();
        return $query;
    }

    // Устанавливаем поля для добавления(изменения)
    function set($value) {
        $operator = ',';
        if (is_array($value)) {
            foreach ($value as $column => $val) {
                if (!$this->set) {
                    $this->set = ' SET ' . $column . '=' . "'" . $val . "' ";
                } else {
                    $this->set .= $operator . " " . $column . '=' . "'" . $val . "' ";
                }
            }
        } else {
            $value = explode(',', $value);
            if (!$this->set) {
                $this->set = ' SET ' . $value[0] . '=' . "'" . $value[1] . "' ";
            } else {
                $this->where .= $operator . " " . $value[0] . '=' . "'" . $value[1] . "' ";
            }
        }
        return $this;
    }

    // Очищаем переменные
    private function exit_function() {
        $this->where = '';
        $this->select = '*';
        $this->limit = '';
        $this->order_by = '';
        $this->query = '';
        return $this;
    }

}
