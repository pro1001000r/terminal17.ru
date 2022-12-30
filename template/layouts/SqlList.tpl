<div class="">
    <table class="table table-sm">
        <thead>
            <tr>
                <th>
                    Имя Таблицы
                </th>
                <th>
                    Имя поля
                </th>
                <th>
                    тип поля
                </th>
            </tr>
        </thead>
        <tbody>
            {foreach $tablesAll as $keyT => $itemT}
                <tr>
                    <td>
                        {$keyT}
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>             
                {foreach $itemT as $key1 => $item}
                    <tr>
                        <td>
                        </td>
                        <td>
                            {$key1}
                        </td>
                        <td>
                            {$item}
                        </td>
                    </tr> 
                {/foreach}
            {/foreach}
        </tbody>
    </table>
</div>

