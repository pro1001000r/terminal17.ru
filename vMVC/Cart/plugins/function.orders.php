
<?php

function smarty_function_orders($params, $smarty)
{

    // $vp = $params['users_id'];

    // if (empty($vp)) { //Ecли пустые параметры то не выводим
    //     return '';
    // }

    $orderPast = [];
    $id = User::getId();

    if ($id) {
        $sql = "SELECT * FROM orders WHERE users_id = " . $id . " ORDER BY id desc";
        // debug($sql);
        $orderPast = VDb::getSQL($sql);
    } else {
        return '';
    }

    foreach ($orderPast as $key => $item) {
        $prods = json_decode($item['orderjson']);

        $orderPast[$key]['summa'] = 0;

        foreach ($prods as $itemprods) {
            $orderPast[$key]['prods'][] = $itemprods;

            $orderPast[$key]['summa'] += $itemprods->sum;
            // foreach ($orderPast[$key]['prods'] as $itemsum) {
            //     $orderPast[$key]['summa'] += $itemsum->sum;
            // }
        }
    };

    $smarty->assign('orderPast', $orderPast);


    $output = $smarty->fetch(ROOT . "/vMVC/Cart/plugins/Orders.tpl");


    return $output;
}
