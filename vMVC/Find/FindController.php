<?php

class FindController
{

    public function actionView()
    {
        // echo 'пщещ';
        if (isset($_POST['qFind']) && (!empty($_POST['qFind']))) {

            $vFind = $_POST['qFind'];

            $vFind0 = '';
            $vFind1 = '';
            $vFind2 = '';
            $vFindarray = explode(' ', $vFind, 3);
            $vFind0 = $vFindarray[0];
            if (isset($vFindarray[1])) {
                $vFind1 = $vFindarray[1];
            };
            if (isset($vFindarray[2])) {
                $vFind2 = $vFindarray[2];
            };


            $sqlLinksite = "SELECT 
                    'Linksite' as tableName,  
                    LS.id as id,  
                    LS.name as name 
                    FROM linksite LS 
                    WHERE ((LS.sitetitle LIKE '%" . $vFind0 . "%') AND (LS.sitetitle LIKE '%" . $vFind1 . "%') AND (LS.sitetitle LIKE '%" . $vFind2 . "%')) 
                    OR ((LS.sitedescription LIKE '%" . $vFind0 . "%') AND (LS.sitedescription LIKE '%" . $vFind1 . "%') AND (LS.sitedescription LIKE '%" . $vFind2 . "%'))";

            $sqlNomen =  "SELECT 'Nomen' as tableName, 
                    Nom.id, 
                    Nom.name 
                    FROM nomen Nom 
                    WHERE ((Nom.name LIKE '%" . $vFind0 . "%') AND (Nom.name LIKE '%" . $vFind1 . "%') AND (Nom.name LIKE '%" . $vFind2 . "%'))
                    OR ((Nom.comment LIKE '%" . $vFind0 . "%') AND (Nom.comment LIKE '%" . $vFind1 . "%') AND (Nom.comment LIKE '%" . $vFind2 . "%'))
                    OR ((Nom.code1c LIKE '%" . $vFind0 . "%') AND (Nom.name LIKE '%" . $vFind1 . "%') AND (Nom.name LIKE '%" . $vFind2 . "%'))";

            $sqlCategory = "SELECT 'Category' as tableName, 
                    Cat.id, 
                    Cat.name 
                    FROM category Cat 
                    WHERE ((Cat.name LIKE '%" . $vFind0 . "%') AND (Cat.name LIKE '%" . $vFind1 . "%') AND (Cat.name LIKE '%" . $vFind2 . "%'))";

            // $sqlArray[] = "CREATE TEMPORARY TABLE vittemp " . $sqlLinksite . " UNION ALL " . $sqlNomen . " UNION ALL " . $sqlCategory;

            // $sqlArray[] = "CREATE TEMPORARY TABLE vittemp " . $sqlNomen . " UNION ALL " . $sqlCategory;
            // $sqlArray[] = "SELECT * FROM vittemp ORDER BY tableName desc, name;";

            $sqlNomen =  "SELECT 'Nomen' as tableName, 
            Nom.id, 
            Nom.name 
            FROM nomen Nom
            WHERE ((Nom.stringfind LIKE '%" . $vFind0 . "%') 
            AND (Nom.stringfind LIKE '%" . $vFind1 . "%') 
            AND (Nom.stringfind LIKE '%" . $vFind2 . "%'))";

            $sqlArray[] = "CREATE TEMPORARY TABLE vittemp " . $sqlNomen;
            $sqlArray[] = "SELECT * FROM vittemp ORDER BY tableName desc, name;";

            // VDb::log($sqlNomen);
            // VDb::log("проверка на запрос");
            
            // $sqlArray[] = $sqlNomen;
            //$sqlArray[] = $sql;

            $findlist = VDb::getSQLPackage($sqlArray);
            //debug($findlist);
        } else {
            $findlist = [];
        }
        $smarty = VSmarty::Run("Find");
        $smarty->assign('findlist', $findlist);
        $smarty->display('FindView.tpl');
        return true; //put your code here
    }
}
