<?php

if (isset($_POST['vdata']) && (isset($_POST['vdata']))) {
    
    $data = $_POST['vdata'];
    $wid = $_POST['wid'];
    $result = 0;
    $value = [];
    
    if (isset($_POST['clid'])) {
        $clients_id = $_POST['clid'];
        $value['clients_id'] = $clients_id;
    }

    if (isset($_POST['vidrabotid'])) {
        $vidrabotid = $_POST['vidrabotid'];
        $value['vidrabot_id'] = $vidrabotid;
    }

    //VDb1 = new Db;
    $sql = "SELECT "
            . "ORD.id as Oid "
            . "FROM orders ORD"
            . "WHERE ((ORD.data='"
            . $data
            . "') AND (ORD.workers_id="
            . $wid
            . "))";
    $listOid = VDb::getSQL($sql);
    if (!empty($value)) {

        $tableDB = 'orders';

        $value['data'] = $data;
        $value['blocked'] = 1;
        $value['workers_id'] = $wid;

        // обновляем
        if (isset($listOid[0])) {
            $Oid = $listOid[0]['Oid'];
            $result = VDb::updateById($tableDB, $Oid, $value);
        }
        // новая
        else {
            $result = VDb::create($tableDB, $value);
        }
    }

    echo "<pre>";
    print_r($_POST);
    echo "<br><br>";
    echo "</pre>";
}
echo "работает" . $result;

class VAjax{

    public $field = "10";

    public function someFunction($args) {

        return $this->field * $args;

    }

}