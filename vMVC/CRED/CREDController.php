<?php

class CREDController {

    public static function actionAjax() {
        //$sVit = json_decode(file_get_contents('php://input'), true);
        $tableName = $_POST['tableName'];
        $vc = new VController($tableName);
        $fields = $vc->fields;

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

            $id = VDb2::create($tableName, $value); 
            
            $str['operation'] = "New";
            $str['mess'] = "Cохранено";
            $str['id'] = $id;
            $str['loc'] = "/" . $tableName . "/Edit/".$id;
            echo json_encode($str, JSON_UNESCAPED_UNICODE);
            return true;
        }

        if (isset($_POST['submitEdit'])) {
            if ((isset($_POST['id'])) && ($_POST['id'] > 0)) {

                $id = $_POST['id'];
                $value = [];
                // Обновляем запись
                foreach ($fields as $key => $val) {
                    if ((isset($_POST[$key])) && (!empty($_POST[$key]))) {
                        if ($key <> 'id' || $key <> 'foto') {
                            $value[$key] = $_POST[$key];
                        }
                    }
                }
                VDb2::update($tableName, $id, $value);
            }

            $str['operation'] = "Edit";
            $str['mess'] = "Cохранено";
            $str['id'] = $id;
            echo json_encode($str, JSON_UNESCAPED_UNICODE);
            return true;
        }

        if (isset($_POST['submitDelete'])) {
            $id = $_POST['id'];
            // Удаляем старое фото
            VFoto::deleteImage($tableName, $id);
            // Удаляем
            $result = VDb::deleteById($tableName, $id);
            // Перенаправляем пользователя на страницу с пустым фото
            $str['operation'] = "Delete";
            $str['mess'] = "Удалено";
            $str['loc'] = "/" . $tableName . "/List/";
            echo json_encode($str, JSON_UNESCAPED_UNICODE);
            return true;
        }
        //**************************************foto*********************************************************
        if (isset($_POST['submitNewfoto'])) {

            $value = [];
            foreach ($fields as $key => $val) {
                if ((isset($_POST[$key])) && (!empty($_POST[$key]))) {
                    if ($key <> 'id') {
                        $value[$key] = $_POST[$key];
                    }
                }
            }

            $id = VDb::create($tableName, $value);

            $str['operation'] = "New";
            $str['mess'] = "Cохранено";
            $str['id'] = $id;
            echo json_encode($str, JSON_UNESCAPED_UNICODE);
            return true;
        }
    }

    public static function actionAjaxFoto() {
        $operation = $_POST['operation'];
        //debug($_POST);
//        debug($_FILES);
//        VDb::log('tablename');
        if ($_POST['operation'] == "NewFiles") {
            $tablename = $_POST['tablename'];
            $tableid = $_POST['tableid'];

            if ($tableid == 0) {
                echo "Сохраните запись";
                return true;
            }

            $input_name = 'files';
            $files = array();
            $diff = count($_FILES[$input_name]) - count($_FILES[$input_name], COUNT_RECURSIVE);
            if ($diff == 0) {
                $files = array($_FILES[$input_name]);
            } else {
                foreach ($_FILES[$input_name] as $k => $l) {
                    foreach ($l as $i => $v) {
                        $files[$i][$k] = $v;
                    }
                }
            }
            debug($files);
            $chet = 1;
            foreach ($files as $file1) {

                $value = [];
                $value['tablename'] = $tablename;
                $value['tableid'] = $tableid;
                $fotoarray = VFoto::setImage($tablename, $tableid, $file1, 0, $chet);
                if (!empty($fotoarray)) {
                    $value['foto'] = $fotoarray[0];
                    $value['foto64'] = $fotoarray[1];
                    if ($chet == 1) {
                        $fotoUpdate['foto'] = $fotoarray[0];
                        VDb::updateById($tablename, $tableid, $fotoUpdate);
                    }
                }
                $id = VDb::create('fotos', $value);
                $chet++;
            }
            echo "Фото сохранено";
        }

        if ($_POST['operation'] == "RotateRightFoto") {
            $idFoto = $_POST['idfoto'];
            $vFoto = VDb::getById('fotos', $idFoto);
            VFoto::editImageRotateRight(ROOT . $vFoto['foto64'], ROOT . $vFoto['foto']);
            VDb::log("Фото повернуто по часовой стрелке " . $idFoto);
            echo "Фото повернуто по часовой стрелке " . $idFoto;
        }

        if ($_POST['operation'] == "RotateLeftFoto") {
            $idFoto = $_POST['idfoto'];
            $vFoto = VDb::getById('fotos', $idFoto);
            VFoto::editImageRotateLeft(ROOT . $vFoto['foto64'], ROOT . $vFoto['foto']);
            VDb::log("Фото повернуто против часовой стрелки " . $idFoto);
            echo "Фото повернуто по часовой стрелки " . $idFoto;
        }

        if ($_POST['operation'] == "MainFoto") {
            $idFoto = $_POST['idfoto'];
            $tableName = $_POST['tablename'];
            $id = $_POST['tableid'];

            $vFoto = VDb::getById('fotos', $idFoto);
            $MainFoto = $vFoto['foto'];
            $value['foto'] = $MainFoto;
            VDb::updateById($tableName, $id, $value);

            VDb::log("Обновлено главное фото " . $idFoto);
            echo "Обновлено главное фото " . $idFoto;
        }

        if ($_POST['operation'] == "DeleteFoto") {
            $idFoto = $_POST['idfoto'];

            VFoto::deleteImage('fotos', $idFoto);

            VDb::deleteById('fotos', $idFoto);

            VDb::log("Фото удалено " . $idFoto);
            echo "Фото удалено";
        }
        return true;
    }

    public static function actionAjaxBase() {
        $operation = $_POST['operation'];
        debug($_POST);

        if ($_POST['operation'] == "ClearBase") {

            //VDb::deleteAll('fotos');
            VDb::deleteAll('category');
            VDb::deleteAll('nomen');
            //VDb::deleteAll('banner');
            //VDb::deleteAll('obmen');
        }
    }

}
