<?php

function smarty_function_pogoda($params, $smarty)
{
        $output = $smarty->fetch(ROOT."/template/layouts/Pogoda.tpl");
        return $output;
}
