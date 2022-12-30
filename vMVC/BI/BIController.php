<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BIController
 *
 * @author VitART
 */
class BIController {

    public function actionView() {

        //User::isStatusAdmin();

        $tableName = 'BI';
        // Получаем идентификатор пользователя из сессии
        //$userId = User::checkLogged();
        // Получаем информацию о пользователе из БД
        //$user = VDb::getById('users', $userId);
        // Подключаем вид
        $smarty = VSmarty::Run($tableName);
        //$smarty->assign('user', $user);
        $smarty->display($tableName . 'View.tpl');
        return true; //put your code here
    }

}
