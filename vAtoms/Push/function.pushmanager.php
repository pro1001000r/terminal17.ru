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

	$output = $smarty->fetch(ROOT . "/vAtoms/Push/pushview.tpl");
	return $output;
}
