<?php

function smarty_function_message($params, $smarty)
{

  $User = User::checkLogged();
  

  $output = $smarty->fetch(ROOT . "/vAtoms/Message/Message.tpl");
  //debug($output);
  return $output;
}
