<?php

class ClientsController {

    // название таблицы в MySql
    const tableDBconst = 'clients';

    public function __construct() {
        User::checkLogged();
    }
    public function actionView($id = 0) {
        
        $tableName = self::tableDBconst;
        $vc = new VController($tableName, 0);
        $vc->View($id);
        $vc->display('vView.tpl');
        return true;
    }

    public function actionEdit($id = 0) {

        $tableName = self::tableDBconst;
        $vc = new VController($tableName);
        $vc->Edit($id);
        $vc->display('vEdit.tpl');
        return true;
    }

    public function actionList() {
        
        $tableName = self::tableDBconst;
        $vc = new VController($tableName);
        $vc->list();
        return true;
    }

}
