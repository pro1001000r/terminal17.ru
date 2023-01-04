<?php

class AjaxController
{

    public function __construct()
    {
        Db::getConnectionRB();
    }

    //Записываем структуру в таблицу сайта
    function setTable1CToSite($table, $data)
    {
        foreach ($data as $value) {
            $this->setRecord1CToSite($table, $value);
        }
        return true;
    }

    function setRecord1CToSite($table, $value)
    {

        if (isset($value['code1c']) && !empty($value['code1c'])) {


            $vp = [];
            $id = VDb2::findCode1C($table, $value['code1c']); //Ищем по коду1С

            if ($id) {      //Если запись найдена по коду 1С
                foreach ($value as $key => $value2) { //перебираем всю полученную структуру
                    $pos = strpos($key, '_id'); //Находим Позицию ссылочного ключа

                    if ($pos === false) {      //обычная переменная!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                        $vp[$key] = $value2;
                    } else {                   //Ссылочная 
                        $tabName = explode("_", $key);
                        $idAsCode1C = VDb2::findCode1C($tabName[0], $value2);
                        if ($idAsCode1C) {
                            $vp[$key] = $idAsCode1C;
                        };
                    }
                }
                //Обновляем запись
                VDb2::update($table, $id, $vp);
            } else { // Новая Запись
                //Здесь Говорит о том что запись пришла из сайта и ей присваиваем ТОЛЬКО код из 1С!!!
                if (isset($value['id']) && !empty($value['id'])) {
                    VDb2::setCode1C($table, $value['id'], $value['code1c']);
                } else { //Если нет ничего - это НОВАЯ Запись из 1С и тогда создаём её

                    foreach ($value as $key => $value2) { //перебираем всю полученную структуру
                        $pos = strpos($key, '_id'); //Находим Позицию ссылочного ключа

                        if ($pos === false) {
                            if ($key == 'parentcode1c') {
                                $idAsCode1C = VDb2::findCode1C($table, $value2);
                                //Сделать проверку существования записи таблицы
                                if ($idAsCode1C) {
                                    $vp['parent_id'] = $idAsCode1C;
                                };
                            } else {
                                $vp[$key] = $value2; //обычная переменная!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                            }
                        } else {                   //Ссылочная 
                            $tabName = explode("_", $key);

                            $idAsCode1C = VDb2::findCode1C($tabName[0], $value2);
                            //Сделать проверку существования записи таблицы
                            if ($idAsCode1C) {
                                $vp[$key] = $idAsCode1C;
                            };
                        }
                    }
                    //Новая запись
                    VDb2::create($table, $vp);
                };
            };
        } else {
            //приход не из 1С - нужно дописать
        };

        return true;
    }


    public function actionObmen()
    {
        $strinput = file_get_contents('php://input');

        //Логи
        //VDb2::log($strinput);

        //Декодируем
        $sVit = json_decode($strinput, true);

        $str = 'null';

        //Задачи
        if (isset($sVit['task'])) {

            if ($sVit['task'] == 'siteto1c') {

                $arr = VDb::getObmen('task');
                foreach ($arr as &$value) {
                    $cl = VDb2::getCode1C('clients', $value['clients_id']);
                    $value['clients_id'] = $cl;
                    $us = VDb2::getCode1C('users', $value['users_id']);
                    $value['users_id'] = $us;
                }
                $str = json_encode($arr);
                echo $str;
                return true;
            };
            if ($sVit['task'] == '1ctosite') {
                if (isset($sVit['data'])) {
                    $data = $sVit['data'];
                    $this->setTable1CToSite('task', $data);
                    echo $str;
                    return true;
                };
            };
        }

        //Контрагенты
        if (isset($sVit['clients'])) {
            if ($sVit['clients'] == 'siteto1c') {
                $arr = VDb2::getObmen('clients');
                $str = json_encode($arr);
                echo $str;
                return true;
            };
            if ($sVit['clients'] == '1ctosite') {
                if (isset($sVit['data'])) {
                    $data = $sVit['data'];
                    $this->setTable1CToSite('clients', $data);
                    echo $str;
                    return true;
                };
            };
        };

        //Пользователи
        if (isset($sVit['users'])) {
            if ($sVit['users'] == 'siteto1c') {

                $sql = "SELECT * FROM users WHERE (status <> 'S' OR status <> 'O')";
                $arr = VDb2::getSQL($sql);

                foreach ($arr as &$value) {
                    $cl = VDb2::getCode1C('clients', $value['clients_id']);
                    $value['clients_id'] = $cl;
                }
                $str = json_encode($arr);
                echo $str;
                return true;
            };
            if ($sVit['users'] == '1ctosite') {
                if (isset($sVit['data'])) {
                    $data = $sVit['data'];
                    $this->setTable1CToSite('users', $data);
                    echo $str;
                    return true;
                };
            };
        };

        //Номенклатура
        if (isset($sVit['nomen'])) {
            if ($sVit['nomen'] == 'siteto1c') {
                $arr = VDb::getObmen('nomen');
                $str = json_encode($arr);
                echo $str;
                return true;
            };
            if ($sVit['nomen'] == '1ctosite') {
                if (isset($sVit['deleteall'])) {
                    VDb::deleteAll('nomen');
                    echo 'номенклатура очищена';
                    return true;
                };
                if (isset($sVit['data'])) {
                    //VDb::deleteAll('nomen');
                    $data = $sVit['data'];
                    $this->setTable1CToSite('nomen', $data);
                    echo $str;
                    return true;
                };
            };
        };

        //Категории
        if (isset($sVit['category'])) {
            if ($sVit['category'] == 'siteto1c') {
                $arr = VDb::getObmen('category');
                $str = json_encode($arr);
                echo $str;
                return true;
            };
            if ($sVit['category'] == '1ctosite') {
                if (isset($sVit['data'])) {
                    $data = $sVit['data'];

                    if (!empty($data)) {
                        VDb::deleteAll('category'); //очищаем категории
                    };

                    $this->setTable1CToSite('category', $data);
                    echo $str;
                    return true;
                };
            };
        };

        //Заказы
        if (isset($sVit['order'])) {
            if ($sVit['order'] == 'siteto1c') {

                $sql = "SELECT * FROM orders WHERE status=0";
                $arr = VDb::getSQL($sql);
                $str = json_encode($arr);
                echo $str;
                return true;
            };
            if ($sVit['order'] == '1ctosite') {
                if (isset($sVit['data'])) {
                    $data = $sVit['data'];
                    $this->setTable1CToSite('orders', $data);
                    echo $str;
                    return true;
                };
            };
        };

        //МобильноеПриложение
        if (isset($sVit['mobile'])) {
            if (!empty($sVit['mobile'])) {

                $vFind = $sVit['mobile'];

                $vFind0 = '';
                $vFind1 = '';
                $vFind2 = '';
                $vFindarray = explode(' ', $vFind, 3);
                $vFind0 = $vFindarray[0];
                if (isset($vFindarray[1])) {
                    $vFind1 = $vFindarray[1];
                };
                if (isset($vFindarray[2])) {
                    $vFind2 = $vFindarray[2];
                };

                $sqlNomen =  "SELECT * FROM nomen Nom 
                            WHERE ((Nom.name LIKE '%" . $vFind0 . "%') AND (Nom.name LIKE '%" . $vFind1 . "%') AND (Nom.name LIKE '%" . $vFind2 . "%'))
                            OR ((Nom.comment LIKE '%" . $vFind0 . "%') AND (Nom.comment LIKE '%" . $vFind1 . "%') AND (Nom.comment LIKE '%" . $vFind2 . "%'))
                            OR ((Nom.price LIKE '%" . $vFind0 . "%') AND (Nom.comment LIKE '%" . $vFind1 . "%') AND (Nom.comment LIKE '%" . $vFind2 . "%'))
                            OR ((Nom.code1c LIKE '%" . $vFind0 . "%') AND (Nom.name LIKE '%" . $vFind1 . "%') AND (Nom.name LIKE '%" . $vFind2 . "%'))";

                // $sqlArray[] = "CREATE TEMPORARY TABLE vittemp " . $sqlLinksite . " UNION ALL " . $sqlNomen . " UNION ALL " . $sqlCategory;
                $sqlArray[] = "CREATE TEMPORARY TABLE vittemp " . $sqlNomen;
                $sqlArray[] = "SELECT * FROM vittemp ORDER BY name;";

                $findlist = VDb::getSQLPackage($sqlArray);
                //$findlist = "Есть данные";
            } else {
                $findlist = [];
            }


            $str = json_encode($findlist);
            //$str = "Нет";
            echo $str;
            return true;
        };

        //МобильноеПриложение Поиск по штрихкоду
        if (isset($sVit['mobileFindBarcode'])) {
            if (!empty($sVit['mobileFindBarcode'])) {

                $vBarcode = $sVit['mobileFindBarcode'];
                //$vBarcode = '46214409';

                $sqlNomen =  "SELECT * FROM nomen Nom 
                    WHERE (Nom.barcode LIKE '%" . $vBarcode . "%')";
                $sqlArray[] = "CREATE TEMPORARY TABLE vittemp " . $sqlNomen;
                $sqlArray[] = "SELECT * FROM vittemp ORDER BY name;";

                $findlist1 = VDb::getSQLPackage($sqlArray);

                if (count($findlist1) > 0) {
                    $findlist = $findlist1[0];
                    $findlist['error'] = false;
                } else {
                    $findlist['error'] = true;
                };
            } else {
                $findlist = [];
            }
            $str = json_encode($findlist);
            echo $str;
            return true;
        };

        //МобильноеПриложение Присвоение штрихкода товару
        if (isset($sVit['mobileAddBarcode'])) {
            if (!empty($sVit['mobileAddBarcode'])) {

                $vObj = $sVit['mobileAddBarcode'];
                $vBarcode = $vObj['barcode'];
                $vnomenid = $vObj['item']['id'];
                //$vBarcode = $sVit['mobileAddBarcode'];
                //$vBarcode = '46214409';

                $sqlArray[] =  "SELECT * FROM nomen Nom 
                    WHERE (Nom.barcode LIKE '%" . $vBarcode . "%')";
                $findbarcode = VDb::getSQLPackage($sqlArray);
                //$findlist = [];
                if (count($findbarcode) == 0) { //Если штрихкод свободный
                    //забираем штрихкод номенклатуры
                    $sqlArray[] =  "SELECT * FROM nomen Nom 
                    WHERE (Nom.id =" . $vnomenid . ")";
                    $nomen = VDb::getSQLPackage($sqlArray);
                    $isbar  = $nomen[0]['barcode'];
                    VDb::log($isbar);

                    $vp['barcode'] = $isbar . $vBarcode . ";";
                    VDb2::update('nomen', $vnomenid, $vp);
                    $findlist = 'Добавлен штрихкод';
                } else {
                    $findlist = 'Уже есть штрихкод у товара: ' . $findbarcode[0]['name'];
                }
            } else {
                $findlist = [];
            }
            $str = json_encode($findlist);
            echo $str;
            return true;
        };

        //МобильноеПриложение Авторизация
        if (isset($sVit['mobileLogin'])) {
            if (!empty($sVit['mobileLogin'])) {

                $vAuth = $sVit['mobileLogin'];

                $sqlNomen =  "SELECT * FROM users 
                            WHERE (users.active = 1 
                            AND users.login  = '" . $vAuth['login']  . "' 
                            AND users.password  = '" . $vAuth['password']  . "' )";
                $sqlArray[] = "CREATE TEMPORARY TABLE vittemp " . $sqlNomen;
                $sqlArray[] = "SELECT * FROM vittemp ORDER BY name;";

                $findUser = VDb::getSQLPackage($sqlArray);

                if (count($findUser) > 0) {
                    $findlist = $findUser[0];
                } else {
                    $findlist = null;
                };
            } else {
                $findlist = null;
            }
            $str = json_encode($findlist);
            echo $str;
            return true;
        };

        //МобильноеПриложение Получение имени по айди
        if (isset($sVit['mobileGetName'])) {
            if (!empty($sVit['mobileGetName'])) {

                $vTab = $sVit['mobileGetName'];

                $sqlArray[] =  "SELECT name FROM " . $vTab['table']  . " WHERE (id = " . $vTab['id']  . ")";

                $findUser = VDb::getSQLPackage($sqlArray);

                if (count($findUser) > 0) {
                    $findlist = $findUser[0]['name'];
                    //$findlist = "tcnm";
                } else {
                    $findlist = null;
                };
            } else {
                $findlist = null;
            }
            $str = json_encode($findlist);
            echo $str;
            return true;
        };

        //МобильноеПриложение ИНВЕНТАРИЗАЦИЯ
        if (isset($sVit['stocktaking'])) {
            if (!empty($sVit['stocktaking'])) {

                $vTab = $sVit['stocktaking'];

                //здесь ищем запись

                $sqlArray[] =  "SELECT * FROM  stocktaking 
                WHERE (stocktaking.nomen_id = " . $vTab['nomenid'] . ")
                AND (stocktaking.box_id = " . $vTab['boxid'] . ")";
                $nomeninv = VDb::getSQLPackage($sqlArray);

                if ($nomeninv != []) {
                    $invred  = $nomeninv[0];

                    $vp['users_id'] =  $vTab['userid'];
                    $vp['date'] = VFunc::vTimeNow();
                    $vp['count'] =   $invred['count'] + $vTab['count'];
                    $vp['comment'] =  "Изменено";

                    VDb2::update('stocktaking', $invred['id'], $vp);

                    $findlist = 'Изменено в инвентаризации';
                } else {

                    //Если нет то новая

                    $vp['date'] = VFunc::vTimeNow();

                    $vp['users_id'] =  $vTab['userid'];
                    $vp['storage_id'] =  $vTab['storageid'];
                    $vp['box_id'] =  $vTab['boxid'];
                    $vp['nomen_id'] =  $vTab['nomenid'];
                    $vp['count'] =  $vTab['count'];
                    $vp['comment'] =  "Первые пробные записи";

                    VDb2::create('stocktaking', $vp);

                    $findlist = 'Добавлено в инвентаризацию';
                }
            } else {
                $findlist = null;
            }
            $str = json_encode($findlist);
            echo $str;
            return true;
        };

        //МобильноеПриложение Количество инвентаризированных
        if (isset($sVit['countstocktaking'])) {
            if (!empty($sVit['countstocktaking'])) {

                $vTab = $sVit['countstocktaking'];

                $count = 0;
                $countall = 0;

                //ищем все
                $sqlArray[] =  "SELECT * FROM  stocktaking 
                WHERE (stocktaking.nomen_id = " . $vTab['nomenid'] . ")";
                $nomeninv = VDb::getSQLPackage($sqlArray);

                if ($nomeninv != []) {
                    $countall  = $nomeninv[0]['count'];
                }
                //ищем по полке
                if ($vTab['boxid'] != null) {
                    $sqlArray[] =  "SELECT * FROM  stocktaking 
                WHERE (stocktaking.nomen_id = " . $vTab['nomenid'] . ")
                AND (stocktaking.box_id = " . $vTab['boxid'] . ")";
                    $nomeninv = VDb::getSQLPackage($sqlArray);

                    if ($nomeninv != []) {
                        $count  = $nomeninv[0]['count'];
                    }
                }
                if ($count == $countall) {
                    $findlist = $count;
                } else {
                    $findlist = $count . '(' . $countall . ')';
                }
            } else {
                $findlist = null;
            }
            $str = json_encode($findlist);
            echo $str;
            return true;
        };

        //МобильноеПриложение
        if (isset($sVit['getstocktaking'])) {
            if (!empty($sVit['getstocktaking'])) {

                $sqlArray[] =  "SELECT * FROM stocktaking ORDER BY date DESC";

                $findlist = VDb::getSQLPackage($sqlArray);
                //$findlist = "Есть данные";
            } else {
                $findlist = [];
            }


            $str = json_encode($findlist);
            //$str = "Нет";
            echo $str;
            return true;
        };

        //МобильноеПриложение данные user
        if (isset($sVit['mobileGetUser'])) {
            if (!empty($sVit['mobileGetUser'])) {

                $us = $sVit['mobileGetUser'];
                $id = $us['id'];

                $sqlArray[] =  "SELECT * FROM userparams WHERE (users_id = " . $id . ")";

                $findlist1 = VDb::getSQLPackage($sqlArray);
                $findlist = [];
                if (count($findlist1) > 0) {
                    $findlist = $findlist1[0];
                }
                //$findlist = "Есть данные";
            } else {
                $findlist = [];
            }


            $str = json_encode($findlist);
            //$str = "Нет";
            echo $str;
            return true;
        };




        // $str = "Нет данных 3";
        echo $str;
        return true;
    }
}
