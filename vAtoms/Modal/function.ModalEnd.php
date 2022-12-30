<?php

function smarty_function_ModalEnd($params, $smarty)
{
        $output = $smarty->fetch(ROOT . "/vAtoms/Modal/ModalEnd.tpl");
        return $output;
}
