<?php

/**
 * Description of Pagenation
 *
 * @author VitART
 */
class Pagenation
{

    public $tableName = '';
    public $limitText = '';
    public $size_page = 5;
    public $page = 1;
    public $total_pages = 1;

    public function __construct($tableName, $size_page = 10, $pagepost = 0, $where = '')
    {
        $this->tableName = $tableName;

        if (isset($_GET['page'])) {
            // Если да то переменной $page присваиваем его
            $this->page = $_GET['page'];
        }

        //Приоритетом забираем из $pagepost 
        if ($pagepost <> 0) {
            $this->page = $pagepost;
        }

        // Назначаем количество данных на одной странице
        $this->size_page = $size_page;
        // Вычисляем с какого объекта начать выводить
        $offset = ($this->page - 1) * $size_page;

        // SQL запрос для получения количества элементов
        // Получаем результат
        $pos = strpos($tableName, "SELECT");
        if ($pos === false) {
            $total_rows = VDb::getCount($this->tableName, $where);
        }else{
            $total_rows  = Count(VDb2::getSQL($this->tableName));
        } 


        // Вычисляем количество страниц
        $this->total_pages = ceil($total_rows / $this->size_page);

        $this->limitText = 'LIMIT ' . $offset . ',' . $this->size_page;
        //////////////////////////////////////////////////
    }

    public function getHtml()
    {
        $str = '<nav aria-label="Пагинация">';
        $str .= '<ul class="pagination justify-content-center">';

        for ($i = 1; $i <= $this->total_pages; $i++) {
            $str .= '<li class="page-item"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
        }
        $str .= '</ul>';
        $str .= '</nav>';
        return $str;
    }
}
