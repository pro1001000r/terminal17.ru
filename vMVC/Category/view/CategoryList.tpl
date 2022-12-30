{header}
{navbar}
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class='text-center'>Категории:</h2>
            {*if (!$userIsGuest)*}
            <a class="btn btn-default" href="/Category/Edit/">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
            {*/if*}
            <br>
        </div>
    </div>
    {cattree}
    <div class="row">
        <div class="col">
            <table class="table table-striped table-condensed">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Наименование</th>
                        <th scope="col">Фото</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Родитель</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $list as $item}
                        <tr>
                            <td>
                                <a href="/Category/Edit/{$item.id}" style='color: #000'>
                                    {$item.id}
                                </a>
                            </td>
                            <td>
                                <a href="/Category/View/{$item.id}" style='color: #000'>
                                    <b>{$item.name}</b>
                                </a>
                            </td>
                            <td>
                                <a href="/Category/View/{$item.id}" style='color: #000'>
                                    <img src="{fotoPath foto = $item.foto}" class="img-responsive" width="60" height="50">
                                    {*$item.foto*}
                                </a>
                            </td>
                            <td>
                                <a href="/Category/View/{$item.id}" style='color: #000'>
                                    {$item.comment}
                                </a>
                            </td>
                            <td>
                                <a href="/Category/View/{$item.id}" style='color: #000'>
                                    {getname table = 'category' id = $item.parent_id}
                                </a>
                            </td>

                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>


{footer}