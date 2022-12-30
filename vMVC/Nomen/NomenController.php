<?php

class NomenController {

    // название таблицы в MySql
    const tableDBconst = 'nomen';

    public function actionView($id = 0) {

        $tableName = self::tableDBconst;
        $vc = new VController($tableName);
        $vc->View($id);
        $vc->display('vView.tpl');
        return true;
    }

    public function actionEdit($id = 0) {

        User::checkLogged();

        $tableName = self::tableDBconst;
        $vc = new VController($tableName);
        $vc->Edit($id);
        $vc->display('vEdit.tpl');
        return true;
    }

    public function actionList() {

        $tableName = self::tableDBconst;
        $vc = new VController($tableName, 0);
        $vc->list(12);
        //debug($_SESSION['order']);
        $vc->display('NomenList.tpl');
        return true;
    }

    public function actionAjaxNomenList() {
        $page = 1;
        if (isset($_POST['page'])) {
            // Если да то переменной $page присваиваем его
            $page = $_POST['page'];
        }
        
        $where = '';
        if (isset($_POST['category'])&& (!empty($_POST['category']))) {
            // Если да то переменной $page присваиваем его
            $category = $_POST['category'];
            $where = " WHERE (category_id='".$category."') ";
        }
        
        Db::getConnection();
        
        $tableName = 'nomen';
               
        $vpage = new Pagenation('nomen', 12, $page, $where);

        //$nomenList = R::findAll('nomen', $category.'order by id desc ' . $vpage->limitText);
        $sql = "SELECT * FROM nomen ". $where .'order by name ' . $vpage->limitText;
        //debug($sql);
        $nomenList = VDb::getSQL($sql);
        
        $smarty = VSmarty::Run($tableName);
        
        $smarty->assign('vpage', $vpage);
        $smarty->assign('list', $nomenList);
        
        $output = $smarty->fetch(ROOT . "/vMVC/Nomen/plugins/AjaxNomenList.tpl");
        //debug($output);
        //$output = 'Работает обмен '.$page;
        //VDb::log($output);
        echo $output;
        return true;
    }

}
