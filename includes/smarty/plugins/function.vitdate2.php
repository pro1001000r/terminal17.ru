<?php

function smarty_function_vitdate2($params, $template)
{
        if (empty($params['format'])) {
            $format = "%b %e, %Y";
        } else {
            $format = $params['format'];
        }
        return strftime($format, time());
}
