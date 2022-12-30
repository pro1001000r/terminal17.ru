<?php

class ConfidenceController {

    public function actionView() {
        $smarty = VSmarty::Run('Confidence');
        $smarty->display('ConfidenceView.tpl');
        return true;
    }

   
}
