<?php

function smarty_function_mail($params, $smarty)
{
        $output = $smarty->fetch(ROOT."/template/layouts/Mail.tpl");
        return $output;
}
