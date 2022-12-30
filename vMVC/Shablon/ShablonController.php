<?php

class ShablonController {

   
    // название таблицы в MySql
    const tableDBconst = 'nameTableMySQL';

    public function actionView($id = 0) {

        $tableName = self::tableDBconst;
        $vc = new VController($tableName);
        $vc->View($id, $param);
        return true;
    }

    public function actionEdit($id = 0) {

        User::checkLogged();
       
        $tableName = self::tableDBconst;
        $vc = new VController($tableName);
        $vc->Edit($id);
        return true;
    }

    public function actionList() {

        $tableName = self::tableDBconst;
        $vc = new VController($tableName);
        $vc->list();
        return true;
    }

}
