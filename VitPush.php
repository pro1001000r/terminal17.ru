<?php

define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Autoload.php');
require_once(ROOT . '/components/VDb2.php');

$mess = [];

if ($_POST['operation'] == "GetMessages") {
    $tokencookie = $_POST['tokenCookie'];
    $tokencookie = urldecode($tokencookie);
    $vp['cookie'] = $tokencookie;
    $sql = "SELECT * FROM tokens WHERE (cookie = :cookie)";
    $zapis = VDb2::getSQL($sql, $vp);
    //VDb2::log($tokencookie);
    //Получить пользователя
    
    if (isset($zapis) && !empty($zapis)) {
        $users_id = $zapis[0]['users_id'];
        //VDb2::log($users_id);
        $sql = "SELECT * FROM messagepush WHERE users_id = '" . $users_id . "'";
        $list = VDb2::getSQL($sql);
        $listmess = [];
        //Получаем зарегистрированные сообщения
        foreach ($list as $value) {
            $listmess[] = $value;
            //VDb2::log($value['id']);
            VDb2::delete('messagepush', $value['id']);
        }
        //Расшифровываем сообщения

        $i = 0;
        foreach ($listmess as $value) {
            $sql = "SELECT * FROM message WHERE id = " . $value['message_id'];
            $mess1 = VDb2::getSQL($sql);

            $mess[$i]['comment'] = $mess1[0]['comment'];
            $mess[$i]['url'] = '/message/view/' . $value['message_id'];
            $mess[$i]['user'] = VDb::getNameById('users', $value['users_id']);
            $mess[$i]['userfrom'] = VDb::getNameById('users', $mess1[0]['users_id']);
            $mess[$i]['userfromid'] = $mess1[0]['users_id'];
            $i++;
        }
    }

    
    //return true;
};

$str = json_encode($mess);
echo $str;
