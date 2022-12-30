
<div class = "row">       
    <div class = "col">

        <p class="text-center font-weight-bold">Задачи</p>
        {if (!$userIsGuest)} 
            {button name = 'Добавить' href = '/Task/Edit/' icon = 'glyphicon-plus'}
        {/if}
        <br>
    </div> 
</div>

{$pagenation}

<br>
{foreach $tasks as $item} 
    <div class = "row">
        <div class = "col">
            <div class = "card vShadow">
                <div class = "card-title text-center font-weight-bold">
                    <a href="/task/Edit/{$item.id}" class="text-dark">
                        {getname table ='clients' id = $item.clients_id}<br>  
                    </a>
                    <a href="/task/Edit/{$item.id}" class="text-dark">
                        {$item.name}  
                    </a>
                </div>
                <div class="card-body">

                    {if ($item.foto <> '')}
                        <img src="{fotoPath foto = $item.foto}" class="img-responsive vImageleft" style="width: 100px">
                    {/if} 
                    {if ($item.dataend =='')}
                        <p class="text-center font-weight-bold text-danger">
                            Не завершена!!!
                        </p>
                        <br>
                    {/if} 
                    от: {dateformat d = $item.data} <br>
                    <span class="text-secondary font-weight-bold">{$item.dopisanie}</span><br>
                    до: {dateformat d = $item.dataend}<br>
                    <span class="glyphicon glyphicon-time font-weight-bold"></span><b>: {$item.dlit}</b><br>
                    <br>
                    {$item.comment}
                </div>
                <div class = "card-subtitle  text-right pb-0 pt-0">

                    {if ($item.price <> '')}
                        <span class="glyphicon glyphicon-ruble"></span>: <b>{$item.price} </b> 
                    {/if} 
                    <span class="glyphicon glyphicon-user"></span>: <b>{getname table ='users' id = $item.users_id}</b> 
                    <a class="btn btn-link text-dark" href="/task/Edit/{$item.id}"> ред.»</a>
                </div>
            </div>
        </div> 
    </div>
    <br>            
{/foreach}

{$pagenation}
