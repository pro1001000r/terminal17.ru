<?php

class TaskController
{

    // название таблицы в MySql
    const tableDBconst = 'task';

    public function actionView($id = 0)
    {

        $tableName = self::tableDBconst;
        $vc = new VController($tableName);
        $vc->View($id);
        return true;
    }

    public function actionEdit($id = 0)
    {

        $user_id = User::checkLogged();

        $tableName = self::tableDBconst;
        $vc = new VController($tableName);

        $tableName = $vc->tableName;
        $tableNameUp = ucfirst($tableName);
        $fields = $vc->fields;

        // выборка из БД
        if (!empty($id)) {
            $item = VDb::getById($tableName, $id);
            foreach ($item as $key => $value) {
                $fields[$key]['value'] = $value;
                if ($fields[$key]['type'] == 'd') {
                    $fields[$key]['value'] = VFunc::formatDate($value);
                }
            }
        } else {
            //Заполняем по умолчанию
            $fields['users_id']['value'] = $user_id;
            $fields['data']['value'] = VFunc::vTimeNow();
        }
        //debug($fields);
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

            if (empty($value['name'])) {
                $value['name'] = "Задача от " . $value['data'];
            }
            $value['name'] = htmlspecialchars($value['name']);
            
            if (!empty($value['comment'])) {
                $value['comment'] = trim(htmlspecialchars($value['comment']));
            }


            $id = VDb::create($tableName, $value);
            if ((isset($_FILES['fotopath'])) && (is_uploaded_file($_FILES["fotopath"]["tmp_name"]))) {
                // Если загружалось, переместим его в нужную папке, дадим новое имя
                $nameImg = VFunc::NewImgPathName($tableName . "_" . $id);
                $pathFullFoto = ROOT . $nameImg;
                move_uploaded_file($_FILES["fotopath"]["tmp_name"], $pathFullFoto);
                $value['foto'] = $nameImg;
                VDb::updateById($tableName, $id, $value);
            }

            //header("Location: /" . $tableName . "/List/");
            header("Location: /Cabinet/");
        }

        if (isset($_POST['submitEdit'])) {

            if ((isset($_POST['id'])) && ($_POST['id'] > 0)) {

                $id = $_POST['id'];
                $value = [];
                if ((isset($_FILES["fotopath"])) && (is_uploaded_file($_FILES["fotopath"]["tmp_name"]))) {
                    $oldfoto = VDb::getById($tableName, $id, 'foto');
                    if (isset($oldfoto)) {
                        $filename = ROOT . $oldfoto;
                        if (file_exists($filename)) {
                            unlink($filename);
                        }
                    }
                    $nameImg = VFunc::NewImgPathName($tableName . "_" . $id);

                    $pathFullFoto = ROOT . $nameImg;

                    move_uploaded_file($_FILES["fotopath"]["tmp_name"], $pathFullFoto);
                    $value['foto'] = $nameImg;
                }

                // Обновляем запись
                //
                foreach ($fields as $key => $val) {
                    if ((isset($_POST[$key])) && (!empty($_POST[$key]))) {
                        if ($key <> 'id' || $key <> 'foto') {
                            $value[$key] = $_POST[$key];
                        }
                    }
                }

                if (empty($value['name'])) {
                    $value['name'] = "Задача от " . VFunc::formatDateRus($value['data']);
                }
                $value['name'] = htmlspecialchars($value['name']);
                if (!empty($value['comment'])) {
                    $value['comment'] = trim(htmlspecialchars($value['comment']));
                }
                

                $result = VDb::updateById($tableName, $id, $value);
            }
            //header("Location: /" . $tableName . "/List/");
            header("Location: /Cabinet/");
        }

        if (isset($_POST['submitDelete'])) {
            // Удаляем старое фото
            $oldfoto = VDb::getById($tableName, $id, 'foto');
            if (isset($foto)) {
                $filename = ROOT . $oldfoto;
                if (file_exists($filename)) {
                    unlink($filename);
                }
            }
            // Удаляем
            $result = VDb::deleteById($tableName, $id);
            // Перенаправляем пользователя на страницу с пустым фото
            //header("Location: /" . $tableName . "/List/");
            header("Location: /Cabinet/");
        }

        //        $d = VFunc::vTimeBetween($fields['dataend']['value'],$fields['data']['value']);
        //        debug($d);
        //        debug(VFunc::vWeek($fields['data']['value']));
        //        debug(VFunc::vDayAgo($fields['data']['value']));
        // Переменные для формы
        $smarty = VSmarty::Run('Task');

        $smarty->assign('tableNameUp', $tableNameUp);
        $smarty->assign('tableName', $tableName);
        $smarty->assign('item', $fields);

        // Подключаем вид
        $smarty->display('TaskEdit.tpl');
        return true;
    }

    public function actionList()
    {

        $tableName = self::tableDBconst;
        $vc = new VController($tableName);
        $vc->list();
        return true;
    }
}
