<?php

function smarty_modifiercompiler_vformat($params)
{
    return 'sprintf(' . $params[ 1 ] . ',' . $params[ 0 ] . ')';
}