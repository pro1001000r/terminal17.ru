<?php

class VTree {

    private $category = array(); //выводим глобально
    public $tree;
    public $selectid;

    public function __construct($tableName, $selectid = 0) {
        $this->category = self::getCategory($tableName);
        $this->selectid = $selectid;
    }

    //используется для построения дерева
    public static function getCategory($tableName) {
        $db = Db::getConnection();
        $query = $db->prepare("SELECT * FROM " . $tableName); //Готовим запрос
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute(); //Выполняем запрос

        $list = array();
        while ($row = $query->fetch()) {
            //Обходим массив
            $list[$row['parent_id']][] = $row; // Здесь обходим массив с родительским элементом
        }
        return $list;
    }

    // вывод дерева РЕКУРСИЯ!!!
    public function outTree($parent_id, $level) {
        if (isset($this->category[$parent_id])) { //Если категория с таким parent_id существует
            $tree = '<ul  class="list-group collapse multi-collapse mx-0 my-0 vShadow" id="multi' . $parent_id . '">';

            if ($parent_id == 0) {
                $tree = '<ul  class="list-group mx-0 my-0" style="overflow-y: scroll;">';
            };

            foreach ($this->category[$parent_id] as $value) { //Обходим ее
                $tree .= '<li class="list-group-item">';
                $strelka = '';
                //Проверить на наличие Вхождений
                if (isset($this->category[$value['id']])) {
                   $strelka = ' <span class="bi bi-chevron-down"></span>';
                   $tree .= '<button class="btn vbtn" type="button" data-target="#multi'
                        . $value['id'] . '" data-toggle="collapse" aria-expanded="false" aria-controls="multi'
                        . $value['id'] . ' " onclick = "vSelectCategory('. $value['id'] .',\''. $value['name'] .'\')">'
                        //. 'id=' . $value['id'] . ' '
                        //. $value['name'] . '(уровень ' . $level . ')'
                        . '<b>' . $value['name'] . $strelka. '</b>'
                        . '</button>';
                } else {
                    $tree .= '<button class="btn vbtn" type="button" onclick = "vSelectCategory('. $value['id'] .',\''. $value['name'] .'\')">'
                        //. 'id=' . $value['id'] . ' '
                        //. $value['name'] . '(уровень ' . $level . ')'
                        . '<b>' . $value['name'] . '</b>'
                        . '</button>';
                }
                //
                

                $level++; //Увеличиваем уровень вложености
                //
                //
                //Рекурсивно вызываем этот же метод, но с новым $parent_id и $level
                $tree .= $this->outTree($value['id'], $level);
                $level--; //Уменьшаем уровень вложености
                $tree .= '</li>';
            }
            $tree .= '</ul>';
        } else
            return null;
        return $tree;
    }

    // для поля селект чтобы можно было выбрать
    public function outTreeForSelect($parent_id, $level) {
        if (isset($this->category[$parent_id])) { //Если категория с таким parent_id существует
            foreach ($this->category[$parent_id] as $value) { //Обходим ее
                //if (isset($this->category[$value['id']])) {
                if ($value['id'] == $this->selectid) {
                    $sel = 'selected';
                } else {
                    $sel = '';
                }
                $this->tree .= "<option value=" . $value['id'] . " " . $sel . ">"
                        . self::vlevels($level) . '' . $value['name'] . '(уровень ' . $level . ") </option>";

                $level++; //Увеличиваем уровень вложености
                //Рекурсивно вызываем этот же метод, но с новым $parent_id и $level
                $this->outTreeForSelect($value['id'], $level);
                $level--; //Уменьшаем уровень вложености
                //}
            }
        }
    }

    // добавляем -- чтоб выводилось по иерархии
    private function vlevels($level) {
        $vstr = '';
        for ($i = 0; $i < $level; $i++) {
            $vstr .= '--';
        }
        return $vstr;
    }

}
