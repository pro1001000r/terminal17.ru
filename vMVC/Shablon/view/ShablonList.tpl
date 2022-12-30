{header}
{navbar}
<div class = "row">       
    <h2 class='text-center'>Шаблонная таблица :</h2>
    <div class = "col">
        {*if (!$userIsGuest)*} 
        <a class="btn btn-default" href="/Vit/View/">
            <span class="glyphicon glyphicon-plus"></span>
        </a>
        {*/if*}
        <br>
    </div> 
</div>
<div class = "row">
    <div class = "col">
        <table class="table table-striped table-condensed">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Наименование</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Дата</th>
                    <th scope="col">Цена</th>
                    <th scope="col">Фото</th>
                    <th scope="col">Пользователь</th>
                </tr>
            </thead>
            <tbody>
                {foreach $list as $item} 
                    <tr>
                        <td>               
                            <a  href="/Vit/View/{$item.id}" style = 'color: #000'>
                                {$item.id}
                            </a>
                        </td>
                        <td>
                            <a  href="/Vit/View/{$item.id}" style = 'color: #000'>
                                <b>{$item.name}</b>
                            </a>
                        </td>
                        <td>
                            <a  href="/Vit/View/{$item.id}" style = 'color: #000'>
                                {$item.comment}
                            </a>
                        </td>
                        <td>
                            <a  href="/Vit/View/{$item.id}" style = 'color: #000'>
                                {$item.data}
                            </a>
                        </td>
                        <td>
                            <a  href="/Vit/View/{$item.id}" style = 'color: #000'>
                                {$item.price}
                            </a>
                        </td>
                        <td>
                            {if ($item.foto)}
                                <a  href="/Vit/View/{$item.id}" style = 'color: #000'>
                                    <img src="{$item.foto}" class="img-responsive img-thumbnail" style ="max-width: 100px">
                                </a>
                            {/if}
                        </td>
                        <td>
                            <a  href="/Vit/View/{$item.id}" style = 'color: #000'>
                                {getname table = 'users' value = $item.users_id}
                            </a>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div> 
</div>

{footer}