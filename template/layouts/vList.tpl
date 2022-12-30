{header}
{navbar}
<div class = "row">       
    <div class = "col">
        {*<h2 class='text-center'>{$tableNameUp} :</h2>*}
        {if (!$userIsGuest)}
        {button href = "/$tableNameUp/Edit/" icon = 'bi-plus-circle-fill'}
        {/if}
        <br>
    </div> 
</div>
<div class = "row">
    <div class = "col">
        <table class="table table-striped table-condensed">
            <thead>
                <tr>
                    {foreach $fields as $key} 
                        <th scope="col">{$key.name}</th>
                    {/foreach}
                </tr>
            </thead>
            <tbody>
                {foreach $list as $item} 
                    <tr>
                        {foreach $fields as $key} 
                            <td> 
                                {if $key.type == 'f'}
                                    <a  href="/{$tableNameUp}/View/{$item.id}" style = 'color: #000'>
                                        <img src=" {$item[$key.name]}" class="img-fluid rounded" style ="max-width: 100px">
                                    </a>
                                {elseif $key.name == 'id'}
                                    <a  href="/{$tableNameUp}/Edit/{$item.id}" style = 'color: #000'>
                                        {$item[$key.name]}
                                    </a>
                                {elseif $key.type == 'sid'}
                                    <a  href="/{$tableNameUp}/Edit/{$item.id}" style = 'color: #000'>
                                        {getname table = $key.table id = $item[$key.name]}  
                                    </a>
                                {else}
                                    <a  href="/{$tableNameUp}/View/{$item.id}" style = 'color: #000'>
                                        {$item[$key.name]}
                                    </a>
                                {/if}
                            </td>                  
                        {/foreach}
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div> 
</div>

{footer}