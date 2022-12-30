<?php

//Корзина из Session
class CartController
{

    public static function actionView()
    {
        $orderNull = true;
        $order = [];
        if (isset($_SESSION['order'])) {
            $order = $_SESSION['order'];
            //debug($order);
            $orderNull = false;
        }
        $user = '';
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
        }


        //debug($orderPast);
        $smarty = VSmarty::Run('Cart');
        $smarty->assign('order', $order);
        $smarty->assign('user', $user);
        $smarty->assign('orderNull', $orderNull);

        $smarty->display(ROOT . "/vMVC/Cart/view/CartView.tpl");
        return true;
    }

    public static function actionClear()
    {
        VOrder::Clear();
        header("Location: /Cart/View/");
        return true;
    }

    public static function actionAjax()
    {

        $output = "Нет данных";

        if (isset($_POST['vSetNomen'])) {
            if (isset($_POST['nomenid'])) {
                // Если да то переменной $page присваиваем его
                $nomenId = $_POST['nomenid'];
                $order = VOrder::setNomen($nomenId);
                $output = json_encode($order, JSON_UNESCAPED_UNICODE);
            }
        }

        if (isset($_POST['SetOrder'])) {
            //добавляем данные клиента
            $client['phone'] = $_POST['phone'];
            if (isset($_POST['user'])) {
                $client['user'] = $_POST['user'];
            }
            $output = VOrder::setOrder($client);
        }


        echo $output;
        return true;
    }
}
