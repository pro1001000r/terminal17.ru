<?php

class InstallController {

    public function actionStart() {

        $smarty = VSmarty::Run('Start');
        $smarty->display('StartIndex.tpl');
        return true;
    }

   
}
