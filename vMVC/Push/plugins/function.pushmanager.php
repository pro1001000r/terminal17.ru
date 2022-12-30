<?php

function smarty_function_pushmanager($params, $smarty)
{

	//$vMD = new Mobile_Detect();
	//debug($vMD);
	// $viplist = VFunc::get_ip_list();
	// debug($viplist);

	$vbrowser = VFunc::useragent();
	$smarty->assign('vbrowser',$vbrowser);
	

	if (!isset($_COOKIE["tokencookie"])) {
		User::generateTokenCookie();
	}else{
		// проверка на уже существующий токен куки
		User::checkTokenCookie();
	}

	$output = $smarty->fetch(ROOT . "/vMVC/Push/plugis/pushview.tpl");
	return $output;
}
