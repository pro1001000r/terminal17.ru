<?php

class AdminController {

    /**
     * Action для страницы "Кабинет администратора"
     */
    public function actionView() {

        //Проверка на админку
        User::isStatusAdmin();

        $tableName = 'Admin';
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();
        // Получаем информацию о пользователе из БД
        $user = VDb::getById('users', $userId);
        // Подключаем вид
        $smarty = VSmarty::Run($tableName);
        $smarty->assign('user', $user);
        $smarty->display($tableName . 'View.tpl');
        return true;
    }

}
