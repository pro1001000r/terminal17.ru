<?php

class PushController
{

    public function actionView()
    {
        $smarty = VSmarty::Run('Push');
        $smarty->display('vView.tpl');
        return true;
    }

    public function actionSend()
    {
        $smarty = VSmarty::Run('Push');
        $smarty->display('PushSend.tpl');
        return true;
    }

    public static function actionAjax()
    {

        $output = False;

        // Записываем токен в базу
        if (isset($_POST['PushSet'])) {
            if (isset($_POST['tokenPush']) && isset($_POST['tokenCookie'])) {

                $tokenPush = $_POST['tokenPush'];
                $tokenCookie = $_POST['tokenCookie'];
                $userAgent = VFunc::useragent();

                $output = VPush::setCurrentToken($tokenPush, $tokenCookie,$userAgent);
            }
        }
        // Получить токен из базы по Cookie
        if (isset($_POST['PushGetFromCookie'])) {
            if (isset($_POST['tokenCookie'])) {
                $tokenCookie = $_POST['tokenCookie'];
                $output = VPush::getPushFromCookieToken($tokenCookie);
            } else {
                $output = "Else сработал";
            }
        }

        // Получить токен из базы по id пользователя
        if (isset($_POST['PushGet'])) {
            if (isset($_POST['users_id'])) {
                $users_id = $_POST['users_id'];
                $output = VPush::getPush($users_id);
            } else {
                $output = false;
            }
        }


        $output = json_encode($output, JSON_UNESCAPED_UNICODE);

        echo $output;
        return true;
    }
}
