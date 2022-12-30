<?php

function smarty_function_footer($params, $smarty)
{
        $output = $smarty->fetch(ROOT."/vAtoms/Footer/Footer.tpl");
        return $output;
}
