<?php

class DevelopController {

    public function actionView() {

        $str = "Моя прекрасная 1234 программа";

        $pattern = "а[\w]+";

        $res = preg_match_all("/$pattern/ui", $str, $matches);
        //$res = preg_split("/$pattern/ui", $str);
        //debug($res);
        //debug($matches);

        Db::getConnectionRB();

        //старый привычный способ
//        $id = 12;
//        $param['id'] = $id;
//        $sql = 'SELECT * FROM `users` WHERE `id` = :id';
//        $res = R::exec($sql, $param);
        //$res1 = R::isoDateTime();
        //чтение
        //$res = R::getall('SELECT login FROM users');

        $id = 3;
        $res = R::load('news', $id);
        //достаем из другой таблицы
        //debug($res);
        $res = $res->users->name;

        //создаем запись
        //$user = R::load('users',12);
//        
//        $news = R::dispense('news2');
//        $news->name = 'Пробная запись РедБин';
//        $news->text = 'Пробная запись РедБин';
//        $news->data = R::isoDateTime();
//        $news->users = $user;
//        R::store($news);
        //Получаем все статьи одного пользователя
        //$user = R::load('users',12);
        //$news = $user->ownNews;
        $res = '';
        $tableName = 'linksite';
        if (isset($_POST['submit'])) {
            echo 'нажата кнопка';
            $res = $_POST['nameTable'];
            //header("Location: /" . $tableName . "/View/");
        }
        
        $tablesName = R::inspect();
        $tablesAll = [];
        foreach ($tablesName as $value) {
            $fields = R::inspect($value);
            foreach ($fields as $key => $value1) {
                $tablesAll[$value][$key] = $value1;
            }
        }
        //debug($tablesAll);
        $smarty = VSmarty::Run('Develop');
        $smarty->assign("tablesAll", $tablesAll);
        $smarty->assign("res", $res);
        $smarty->display('DevelopView.tpl');

        return true;
    }

}
