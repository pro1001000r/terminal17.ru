<?php

function smarty_function_vlist($params, $smarty)
{

  if (isset($params['table'])) {
    $table = $params['table'];
  }
  $fieldsName = VDb::getColumnNames($table);
  $fields = VDb::getFields($table);
  $pageCount=5;

  if ($pageCount <> 0) {
    $vpage = new Pagenation($table, $pageCount);
    $vp['list'] = VDb::getAll($table, '', '', 'id desc', $vpage->limitText);
  } else {
    $vpage = '';
    $vp['list'] = VDb::getAll($table, '', '', 'id desc');
  }
  
  $vp['tableName'] = $table;
  $vp['tableNameUp'] = ucfirst($table);
  $vp['fieldsName'] = $fieldsName;
  $vp['fields'] = $fields;
  $vp['vpage'] = $vpage;

  VSmarty::setSmartyParams($vp,$smarty);

  $output = $smarty->fetch(ROOT . "/vAtoms/List/List.tpl");
  //debug($output);
  return $output;
}
