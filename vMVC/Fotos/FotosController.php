<?php

class FotosController {

    // название таблицы в MySql
    const tableDBconst = 'fotos';

    public function actionView($id = 0) {

        $tableName = self::tableDBconst;
        $vc = new VController($tableName);
        $vc->View($id);
        $vc->display("vView.tpl");

        return true;
    }

    public function actionEdit($id = 0) {

        User::checkLogged();

        $tableName = 'fotos';
        $tableNameUp = ucfirst($tableName);

        $vc = new VController($tableName);
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

            if (empty($value)) {
                $value['comment'] = VFunc::ImgNameGenereteDate('NoName');
            };

            $id = VDb::create($tableName, $value);

            if ((isset($_FILES['fotopath'])) && (is_uploaded_file($_FILES["fotopath"]["tmp_name"]))) {
                $fotoarray = VFoto::setImage($tableName, $id);
                $value['foto'] = $fotoarray[0];
                $value['foto64'] = $fotoarray[1];
                VDb::updateById($tableName, $id, $value);
            }

            header("Location: /" . $tableName . "/List/");
        }

        if (isset($_POST['submitEdit'])) {
            if ((isset($_POST['id'])) && ($_POST['id'] > 0)) {

                $id = $_POST['id'];
                $value = [];
                if ((isset($_FILES["fotopath"])) && (is_uploaded_file($_FILES["fotopath"]["tmp_name"]))) {
                    $fotoarray = VFoto::setImage($tableName, $id,'', true);
                    $value['foto'] = $fotoarray[0];
                    $value['foto64'] = $fotoarray[1];
                }

                // Обновляем запись
                foreach ($fields as $key => $val) {
                    if ((isset($_POST[$key])) && (!empty($_POST[$key]))) {
                        if ($key <> 'id' || $key <> 'foto') {
                            $value[$key] = $_POST[$key];
                        }
                    }
                }
                $result = VDb::updateById($tableName, $id, $value);
            }
            header("Location: /" . $tableNameUp . "/List/");
        }

        if (isset($_POST['submitDelete'])) {
            // Удаляем старое фото
            VFoto::deleteImage($tableName, $id);
            // Удаляем
            $result = VDb::deleteById($tableName, $id);
            // Перенаправляем пользователя на страницу с пустым фото
            header("Location: /" . $tableName . "/List/");
        }

        // Переменные для формы
        $smarty = VSmarty::Run('Fotos');

        $smarty->assign('tableNameUp', $tableNameUp);
        $smarty->assign('tableName', $tableName);
        $smarty->assign('item', $fields);

        // Подключаем вид
        $smarty->display('FotosEdit.tpl');
        return true;
    }

    public function actionList() {

        $tableName = self::tableDBconst;
        $vc = new VController($tableName);


        $tableNameUp = ucfirst($tableName);

        $list = VDb::getAll($tableName);
        $fields = $vc->fields;
        //debug($list);
        $smarty = VSmarty::Run($tableNameUp);
        $smarty->assign('list', $list);
        $smarty->assign('tableName', $tableName);
        $smarty->assign('tableNameUp', $tableNameUp);
        $smarty->assign('fields', $fields);
        $smarty->display('FotosList.tpl');
        return true;
    }
}
