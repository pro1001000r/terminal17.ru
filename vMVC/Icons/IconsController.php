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
class IconsController
{

    public function actionView()
    {

        //User::isStatusAdmin();


        $icons = [];
        //1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111
        $filecss = ROOT . "/template/css/font-awesome.css"; //путь к файлу
        $textfile = file_get_contents($filecss);
        $str = "Моя прекрасная 1234 программа";

        $pattern = "\.icon[a-z-]+\:";

        $res = preg_match_all("/$pattern/ui", $textfile, $matches);
        //$res = preg_split("/$pattern/ui", $str);
        //debug($res);
        //debug($matches);

        $arr = $matches[0];
        //debug($arr);
        //$icons = [];
        foreach ($arr as $value) {
            //debug($value);
            $pattern = "[^\.\:]+";
            preg_match_all("/$pattern/ui", $value, $matches);
            $name = $matches[0][0];
            $namesmall = str_replace("icon-", "", $name);

            $names['name'] = $name;
            $names['namesmall'] = $namesmall;
            $names['font'] = 'font-awesome';
            $icons[$namesmall . '1'] = $names;
        }


        //1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111
        $filecss = ROOT . "/template/css/VitGlyphicon.css"; //путь к файлу
        $textfile = file_get_contents($filecss);
        $str = "Моя прекрасная 1234 программа";

        //debug($textfile);

        $pattern = "\.glyphicon[a-z-]+\:";

        $res = preg_match_all("/$pattern/ui", $textfile, $matches);
        //$res = preg_split("/$pattern/ui", $str);
        //debug($res);
        //debug($matches);

        $arr = $matches[0];
        //debug($arr);
        //$glyphicon = [];
        foreach ($arr as $value) {
            //debug($value);
            $pattern = "[^\.\:]+";
            preg_match_all("/$pattern/ui", $value, $matches);

            $name = $matches[0][0];
            $namesmall = str_replace("glyphicon-", "", $name);

            $names['name'] = $name;
            $names['namesmall'] = $namesmall;
            $names['font'] = 'VitGlyphicon';
            $icons[$namesmall . '2'] = $names;
        }


        //222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222
        $filecss = ROOT . "/template/css/bootstrap-icons.css"; //путь к файлу
        $textfile = file_get_contents($filecss);
        $str = "Моя прекрасная 1234 программа";

        //debug($textfile);

        $pattern = "\.bi[a-z-]+\:";

        $res = preg_match_all("/$pattern/ui", $textfile, $matches);
        //$res = preg_split("/$pattern/ui", $str);
        //debug($res);
        //debug($matches);

        $arr = $matches[0];
        //debug($arr);
        //$bi = [];
        foreach ($arr as $value) {
            //debug($value);
            $pattern = "[^\.\:]+";
            preg_match_all("/$pattern/ui", $value, $matches);
            $name = $matches[0][0];
            $namesmall = str_replace("bi-", "", $name);

            $names['name'] = $name;
            $names['namesmall'] = $namesmall;
            $names['font'] = 'bootstrap-icons';
            $icons[$namesmall . '3'] = $names;
        }


        //33333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333
        //debug($icons);
        ksort($icons);

        $tableName = 'Icons';
        $smarty = VSmarty::Run($tableName);
        $smarty->assign("icons", $icons);
        $smarty->display('IconsView.tpl');
        return true; //put your code here
    }
}
