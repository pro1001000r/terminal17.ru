<?php

class VOrder {

    //Записываем номенклатуру в сессию
    public static function setNomen($id) {

        $nom = VDb::getById('nomen', $id);

        if (isset($_SESSION['order'])) {
            $order = $_SESSION['order'];
        }
        $id = "idProduct".$id; 
        if (isset($order[$id])) {
            $order[$id]['count'] = $order[$id]['count'] + 1;
            $order[$id]['sum'] = $order[$id]['price'] * $order[$id]['count'];
        } else {
            $order[$id]['id'] = $nom['id'];
            $order[$id]['code1c'] = $nom['code1c'];
            $order[$id]['name'] = $nom['name'];
            $order[$id]['price'] = $nom['price'];
            $order[$id]['count'] = 1;
            $order[$id]['sum'] = $nom['price'] * $order[$id]['count'];
        }
        $_SESSION['order'] = $order;
        //debug($_SESSION['order']);
        return $order[$id];
    }

    public static function Clear() {
        unset($_SESSION["order"]);
        return true;
    }

    //получаем количество товара по id из сессии
    public static function getCountNomen($id) {

        $nom = VDb::getById('nomen', $id);
        $orderCount = 0;
        $id = "idProduct".$id;
        if (isset($_SESSION['order'])) {
            $order = $_SESSION['order'];
            if (isset($order[$id])) {
                $orderCount = $order[$id]['count'];
            }
        }
        return $orderCount;
    }

    //Записываем заказ из сессии в таблицу
    public static function setOrder($clientData) {
        $otvet = 'Нет Данных';

        $order = [];
        if (isset($_SESSION['order'])) {
            $otvet = 'Передано в обработку';

            if (isset($clientData['user'])) {
                $value['users_id'] = $clientData['user'];
            }
            
            $order = $_SESSION['order'];
            //debug($order);
            $value['orderjson'] = json_encode($order, JSON_UNESCAPED_UNICODE);
            $value['phone'] = $clientData['phone'];
            $value['status'] = 0;
            $value['statusname'] = $otvet;
            $value['date'] = VFunc::vTimeNow();
            VDb::create('orders', $value);
            self::Clear();
            //echo $otvet;
        }

        echo $otvet;
    }

}
