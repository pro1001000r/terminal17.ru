<?php

$vc = new VController($_POST['tableName']);
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

    if (empty($value)) {
        $value['name'] = VFunc::ImgNameGenereteDate('NoName');
    };

    $id = VDb2::create($tableName, $value);

    if ((isset($_FILES['fotopath'])) && (is_uploaded_file($_FILES["fotopath"]["tmp_name"]))) {
        $fotoarray = VFoto::setImage($tableName, $id);
        $value['foto'] = $fotoarray[0];
        $value['foto64'] = $fotoarray[1];
        VDb2::update($tableName, $id, $value);
    }

    echo 'New';
}

if (isset($_POST['submitEdit'])) {
    if ((isset($_POST['id'])) && ($_POST['id'] > 0)) {

        $id = $_POST['id'];
        $value = [];
        if ((isset($_FILES["fotopath"])) && (is_uploaded_file($_FILES["fotopath"]["tmp_name"]))) {
            $fotoarray = VFoto::setImage($tableName, $id, true);
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
        //$result = VDb::updateById($tableName, $id, $value);
        $result = VDb2::update($tableName, $id, $value);
    }
    echo 'Edit';
    ;
}

if (isset($_POST['submitDelete'])) {
    // Удаляем старое фото
    VFoto::deleteImage($tableName, $id);
    // Удаляем
    $result = VDb::deleteById($tableName, $id);
    // Перенаправляем пользователя на страницу с пустым фото
    echo 'Delete';
}

