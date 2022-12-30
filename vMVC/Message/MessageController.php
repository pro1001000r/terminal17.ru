<?php

class MessageController
{

    public $smarty;

    const tableDBconst = 'message';

    public static function actionList()
    {
        $table = 'message';
        $smarty = VSmarty::Run($table);

        $messages = self::MessageList();

        $smarty->assign("user", $_SESSION['user']);
        $smarty->assign("messages", $messages);

        $page = 1;
        if (isset($_GET['page'])) {
            // Если да то переменной $page присваиваем его
            $page = $_GET['page'];
        }
        $smarty->assign("page", $page);

        $userfrom = 0;
        if (isset($_GET['userfrom'])) {
            // Если да то переменной $page присваиваем его
            $userfrom = $_GET['userfrom'];
        }
        $smarty->assign("userfrom", $userfrom);

        $smarty->display("MessageList.tpl");
        return true;
    }

    public static function MessageList($fromid = 0, $users_id = 0)
    {
        $table = 'message';
        $pageCount = 5;

        if ($fromid == 0) {
            $sql = "SELECT * FROM message WHERE (fromid = 0) ORDER BY id desc";
        } else {
            $sql = "SELECT * FROM message WHERE ((fromtable = 'users' AND fromid = " . $fromid . " AND users_id = " . $users_id . ") 
            OR (fromtable = 'users' AND fromid = " . $users_id . " AND users_id = " . $fromid . ")) ORDER BY id desc";
        };

        VFunc::setGet();
        
        $vpage = new Pagenation($sql, $pageCount);
        $vp['vpage'] = $vpage;

        //$list = VDb::getAll($table, '', '', 'id desc', $vpage->limitText);

        $sql = $sql . ' ' . $vpage->limitText;
        $list = VDb2::getSQL($sql);


        $vp['list'] = array_reverse($list);
        $vp["user"] = $_SESSION['user'];


        $smarty = VSmarty::Run($table);
        VSmarty::setSmartyParams($vp, $smarty);

        $output = $smarty->fetch(ROOT . "/vMVC/Message/plugins/Messages.tpl");

        return $output;
    }


    public static function actionAjax()
    {
        if (isset($_POST['operation'])) {
            if ($_POST['operation'] == "SendMessage") {

                $vp['comment'] = $_POST['message'];
                $vp['date'] = VFunc::vTimeNow();
                $vp['users_id'] = $_POST['users_id'];
                $vp['fromtable'] = $_POST['fromtable'];
                $vp['fromid'] = $_POST['fromid'];

                //Записываем сообщение
                $message_id = VDb2::create('message', $vp);

                //регистрируем сообщение для пуш
                if ($_POST['fromtable'] = 'users' and $_POST['fromid'] <> 0) {
                    $vp2['message_id'] = $message_id;
                    $vp2['users_id'] = $_POST['fromid'];
                    $vp2['date'] = VFunc::vTimeNow();
                    VDb2::create('messagepush', $vp2);
                };

                echo self::MessageList($_POST['fromid'], $_POST['users_id']);
            }

            if ($_POST['operation'] == "UpdateMessages") {

                echo self::MessageList($_POST['fromid'], $_POST['users_id']);
            }

            if ($_POST['operation'] == "GetMessages") {
                $tokencookie = $_POST['tokenCookie'];
                $tokencookie = urldecode($tokencookie);
                $vp['cookie'] = $tokencookie;
                $sql = "SELECT * FROM tokens WHERE (cookie = :cookie)";
                $zapis = VDb2::getSQL($sql,$vp);
                //VDb2::log($tokencookie);
                //Получить пользователя
                $mess = [];
                if (isset($zapis) && !empty($zapis)) {
                    $users_id = $zapis[0]['users_id'];
                    VDb2::log($users_id);
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

                $str = json_encode($mess);
                
                echo $str;
                return true;
            }
        }

        return true;
    }
}
