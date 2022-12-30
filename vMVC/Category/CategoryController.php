<?php

class CategoryController {

    // название таблицы в MySql
    const tableDBconst = 'category';

    public function actionView($id = 0) {

        // название таблицы в MySql
        $tableName = self::tableDBconst;
        $tableNameUp = ucfirst($tableName);

        if ($id == 0) {
            header("Location: /" . $tableName . "/List/");
            return true;
        }

        $smarty = VSmarty::Run($tableNameUp);
        $smarty->assign('tableName', $tableName);

        $item = VDb::getById($tableName, $id);

        $infoTable = VDb::getColumnNames($tableName);

        foreach ($item as $key => $value) {
            $smarty->assign($key, $value);
        }

        $smarty->display($tableNameUp . 'View.tpl');
        return true;
    }

    public function actionEdit($id = 0) {
        // название таблицы в MySql
        $tableName = self::tableDBconst;

        $vc = new VController($tableName,0);
        $vc->Edit($id);
        $vc->display('CategoryEdit.tpl');
        return true;
    }

    public function actionList() {
        $tableName = self::tableDBconst;
        $tableNameUp = ucfirst($tableName);

        $list = VDb::getAll($tableName);

        $smarty = VSmarty::Run($tableNameUp);
        $smarty->assign('list', $list);
        $smarty->assign('tableName', $tableName);
        $smarty->display($tableNameUp . 'List.tpl');
        return true;
    }

}
