<?php

class LinkSiteController {

    // название таблицы в MySql
    const tableDBconst = 'linksite';

    public function actionView($id = 0) {

        $tableName = self::tableDBconst;
        $vc = new VController($tableName);
        $vc->View($id);
        $vc->display('vView.tpl');
        return true;
    }

    public function actionEdit($id = 0) {

        User::checkLogged();
        // название таблицы в MySql
        $tableName = self::tableDBconst;

        $vc = new VController($tableName, 0);
        $vc->EditV2($id);
        //debug($vc);
        $vc->display('LinksiteEdit.tpl');
        return true;
    }

    public function actionList() {

        $tableName = self::tableDBconst;

        $vc = new VController($tableName, 0);
        $vc->list(25);
        $vc->display('LinksiteList.tpl');
        return true;
    }

    //Внутренний аджакс
    public function actionGetParse() {
        $sVit = json_decode(file_get_contents('php://input'), true);
        $str = 'нет данных';

        //Парсер ПОСТ запроса по ДЖЭЙСОН
        if (isset($sVit['linkname'])) {
            //парсим ссылку и пишем в поля

            $graph = OpenGraph::fetch($sVit['linkname']);
            
            $value['sitetitle'] = '';
            //debug($value);
            if (isset($graph->title)) {
                $prt = utf8_decode($graph->title);
                if (!(strpos($prt, '??') === false)){
                    $prt = $graph->title;
                };
                $value['sitetitle'] = $prt;
            };
            $value['sitedescription'] = '';
            if (isset($graph->description)) {
                $prt = utf8_decode($graph->description);
                if (!(strpos($prt, '??') === false)){
                    $prt = $graph->description;
                };
                $value['sitedescription'] = $prt;
            };
            $value['siteimage'] = '';
            if (isset($graph->image)) {
                $value['siteimage'] = $graph->image;
            };
            $str = json_encode($value, JSON_UNESCAPED_UNICODE);
        };

        echo $str;
        return true;
    }

}
