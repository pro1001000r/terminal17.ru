<?php

class VController {

    //**********************************************************
    // название таблицы в MySql
    public $tableName = ""; // Название Таблицы и страницы
    public $fields = [];    // Таблица переменных
    public $default = true; // Значения по умолчанию
    public $smarty;         // Подключение шаблонизатора Смарти

    //**********************************************************
    // Конструктор
    public function __construct($tableName, $default = true) {
        $this->tableName = $tableName;
        $this->fieldsName = VDb::getColumnNames($tableName); // Получаем названия полей
        $this->default = $default;
        $this->fields = $this->getFields();
        if ($default) {
            $this->smarty = VSmarty::Run();
        } else {
            $this->smarty = VSmarty::Run($tableName);
        }
        //$this->setSmarty($tableName);
    }

    public function getFields() {

        $infoTable = $this->fieldsName;

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

    //03.12.2021
    public function setFields($item) {
        // заполняем поля и значения таблицы
        foreach ($item as $key => $value) {
            $this->fields[$key]['value'] = $value;
        }
    }

    //03.12.2021
    //устанавливаем переменные для СМАРТИ
    public function setSmarty($path = "/template/layouts/") {
        $this->smarty = VSmarty::Run($path);
        return $this->smarty;
    }

    // заполняем Для Смарти значения переданные из контроллера
    public function setSmartyParams($params = []) {
        if (isset($params)) {
            foreach ($params as $key => $value) {
                $this->smarty->assign($key, $value);
            }
        }
        return true;
    }

    public function display($nameTpl) {
        $this->smarty->display($nameTpl);
        return true;
    }

    public function fetch($nameTpl) {
        $this->smarty->fetch($nameTpl);
        return true;
    }

    public function View($id = 0) {

        // название таблицы в MySql
        $vp['tableName'] = $this->tableName;
        $vp['tableNameUp'] = ucfirst($vp['tableName']);

        if ($id == 0) {
            VFunc::show($vp['tableName']);
        }

        // подключаем шаблон по дефолту
        $pathTpl = '/template/layouts/';
        $nameTpl = 'vView.tpl';

        $item = VDb::getById($vp['tableName'], $id);
        $this->setFields($item);

        $vp['fields'] = $this->fields;
        $this->setSmartyParams($vp);

        $title = $item['name'] . ' - 1С в Кызыле';
        $this->smarty->assign('title', $title);
        //debug($vp);
        //$smarty->display($nameTpl);
        return true;
    }

    public function Edit($id = 0) {

        User::checkLogged();

        //**********************************************************
        // название таблицы в MySql
        $vp['tableName'] = $this->tableName;
        $vp['tableNameUp'] = ucfirst($vp['tableName']);
        //**********************************************************
        // создем пустые переменные для выборки из БД
        //$id = '';
        $fields = $this->fields;

        // выборка из БД
        if (!empty($id)) {
            $item = VDb::getById($vp['tableName'], $id);
            foreach ($item as $key => $value) {
                $fields[$key]['value'] = $value;
                if ($fields[$key]['type'] == 'd') {
                    $fields[$key]['value'] = VFunc::formatDate($value);
                }
            }
        }
        $vp['item'] = $fields;

        // Переменные для формы
        //$smarty = VSmarty::Run('/template/layouts/');
        //$this->smarty = VSmarty::Run($vp['tableName']);
        $this->setSmartyParams($vp);
//        $this->smarty->assign('tableNameUp', $tableNameUp);
//        $this->smarty->assign('tableName', $tableName);
//        $this->smarty->assign('item', $fields);
        // Подключаем вид
        //$smarty->display('vEdit.tpl');
        return true;
    }

    public function EditV2($id = 0) {

        $users_id = User::checkLogged();

        $vp['id'] = $id;
        foreach ($this->fields as $key => $value) {
            $vp[$key] = '';
            if ($key = 'users_id') {
                $vp[$key] = $users_id;
            }
            if ($key = 'data') {
                $vp[$key] = VFunc::vTimeNow();
            }
        }
        //**********************************************************
        // название таблицы в MySql
        $vp['tableName'] = $this->tableName;
        $vp['tableNameUp'] = ucfirst($this->tableName);
        //**********************************************************
        // создем пустые переменные для выборки из БД
        //$id = '';
        $fields = $this->fields;


        // выборка из БД
        if (!empty($id)) {
            $item = VDb::getById($this->tableName, $id);
            foreach ($item as $key => $value) {
                $vp[$key] = $value;
                if ($fields[$key]['type'] == 'd') {
                    $vp[$key] = VFunc::formatDate($value);
                }
            }
        }

        // Обработка формы
        if (isset($_POST['submitNew'])) {

            $value = [];
            foreach ($fields as $key => $val) {
                if ((isset($_POST[$key])) && (!empty($_POST[$key]))) {
                    if ($key <> 'id') {
                        $value[$key] = $_POST[$key];
                    }
                }
            }
            $id = VDb2::create($this->tableName, $value);
            header("Location: /" . $vp['tableNameUp'] . "/List/");
        }

        if (isset($_POST['submitEdit'])) {

            $value = [];

            // Обновляем запись
            foreach ($fields as $key => $val) {
                if ((isset($_POST[$key])) && (!empty($_POST[$key]))) {
                    if ($key <> 'id' || $key <> 'foto') {
                        $value[$key] = $_POST[$key];
                    }
                }
            }

            $result = VDb2::update($this->tableName, $id, $value);

            header("Location: /" . $vp['tableNameUp'] . "/List/");
        }

        if (isset($_POST['submitDelete'])) {

            // Удаляем
            $result = VDb::deleteById($this->tableName, $id);
            // Перенаправляем пользователя на страницу с пустым фото
            header("Location: /" . $vp['tableNameUp'] . "/List/");
        }

        // Переменные для формы
        $this->setSmartyParams($vp);
        return true;
    }

    public function List($pageCount = 0) {
        if ($this->default) {
            $tableName = $this->tableName;
            $tableNameUp = ucfirst($tableName);

            $list = VDb::getAll($tableName);
            $fields = $this->fields;
            //debug($fields);
            $smarty = VSmarty::Run('/template/layouts/');
            $smarty->assign('list', $list);
            $smarty->assign('tableName', $tableName);
            $smarty->assign('tableNameUp', $tableNameUp);
            $smarty->assign('fields', $fields);
            $smarty->display('vList.tpl');
        } else {
            // Передаем конкретно под Смарти
            if ($pageCount <> 0) {
                $vpage = new Pagenation($this->tableName, $pageCount);
                $vp['list'] = VDb::getAll($this->tableName, '', '', 'id desc', $vpage->limitText);
            } else {
                $vpage = '';
                $vp['list'] = VDb::getAll($this->tableName, '', '', 'id desc');
            }
            $vp['tableName'] = $this->tableName;
            $vp['tableNameUp'] = ucfirst($this->tableName);
            $vp['fields'] = $this->fields;
            $vp['vpage'] = $vpage;

            $this->setSmartyParams($vp);
        }
        return true;
    }

}
