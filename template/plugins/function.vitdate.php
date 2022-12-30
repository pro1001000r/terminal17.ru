<?php

function smarty_function_vitdate($params, $smarty)
{
        if (empty($params['format'])) {
            $format = "%b %e, %Y";
        } else {
            $format = $params['format'];
        }
        
        if (!empty($params['VitProba'])) {
            return $params['VitProba'];
        }
        return strftime($format, time());
}
