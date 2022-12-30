{header}
{navbar}
<div class="container">
    <div class="row">
        <h2 class='text-center'>Фото:</h2>
        <div class="col">
            {*if (!$userIsGuest)*}
            <a class="btn btn-default" href="/Fotos/Edit/">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
            {*/if*}
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-condensed">
                <thead>
                    <tr>
                        <th scope="col">Наименование</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $list as $item}
                        <tr>
                            <td>
                                <a href="/Fotos/Edit/{$item.id}" style='color: #000'>
                                    {$item.id}
                                </a>
                            </td>
                            <td>
                                {if ($item.foto)}
                                    <a href="/Fotos/Edit/{$item.id}" style='color: #000'>
                                        <img src="{$item.foto}" class="img-responsive img-thumbnail" style="max-width: 250px">
                                    </a>
                                {/if}
                            </td>
                            <td>
                                <a href="/Fotos/Edit/{$item.id}" style='color: #000'>
                                    {$item.comment}
                                </a>
                            </td>
                            <td>
                                <a href="/Fotos/Edit/{$item.id}" style='color: #000'>
                                    <b>{$item.tablename} {$item.tableid}</b>
                                </a>
                            </td>
                            <td>
                                <a href="/Fotos/Edit/{$item.id}" style='color: #000'>
                                    <b>{$item.code1c}</b>
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