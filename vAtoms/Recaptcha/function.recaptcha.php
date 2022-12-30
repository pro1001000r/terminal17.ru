<?php

function smarty_function_recaptcha($params, $smarty) {
    
        $output = $smarty->fetch(ROOT . "/vAtoms/Recaptcha/recaptcha.tpl");

    return $output;
}