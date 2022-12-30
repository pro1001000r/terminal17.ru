<?php

class DevelopController
{

    public function actionView()
    {
        if (!User::isStatusAdmin("S")) {
            header("Location: /");
        };


        Db::getConnectionRB();
        //$arr = VDb::getObmen('task');
        //$arr = VDb::getAll('task');
        //debug($arr);
        //старый привычный способ
        //        $id = 12;
        //        $param['id'] = $id;
        //        $sql = 'SELECT * FROM `users` WHERE `id` = :id';
        //        $res = R::exec($sql, $param);
        //$res1 = R::isoDateTime();
        //чтение
        //$res = R::getall('SELECT login FROM users');
        //        //создаем запись
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
        //$tableName = 'linksite';

        if (isset($_POST['submit'])) {
            $res = $_POST['nameTable'];
            if (isset($_POST['nameTable'])) {
                $res = $_POST['nameTable'];
                $newt = R::dispense($res);
                $newt->name = 'Пробная запись РедБин';
                $newt->comment = 'Пробная запись РедБин';
                //$newt->text = 'Пробная запись РедБин';
                //$newt->data = R::isoDateTime();
                //$newt->dataend = R::isoDateTime();
                //$newt->users_id = 1;
                //$newt->barcode = 'f2012345678901';
                $newt->code1c = 'f12345678901';
                //$newt->price = 100.99;
                //$newt->client = 1;
                //$newt->article = 'Пробнаязапись';
                $newt->foto = 'Пробнаязапись';

                R::store($newt);

                //R::wipe($res);
            }
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
