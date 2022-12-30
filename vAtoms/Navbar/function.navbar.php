<?php

function smarty_function_navbar($params, $smarty) {
    $userIsGuest = User::isGuest();
    if (!$userIsGuest) {
        $userName = VDb::getNameById('users', $_SESSION['user']);
        $smarty->assign('userName', $userName);

        $smarty->assign('isAdmin', User::isStatusAdmin());
    } 
     
    $listcategory = VDb::getAll('category','id,name,foto','','name');
    
    $smarty->assign('userIsGuest', $userIsGuest);
    $smarty->assign('listcategory', $listcategory);
    
    $output = $smarty->fetch(ROOT . "/vAtoms/Navbar/NavBar.tpl");
    return $output;
}
