
<div class = "row">       
    <div class = "col">
        <br>
        <h2 class="text-center vit-color-gold">Новости:</h2>
        {if (!$userIsGuest)} 
            <a class="btn" href="/News/Add/">
                <span class="glyphicon glyphicon-plus"></span> Добавить
            </a>
        {/if}
        <br>
    </div> 
</div>


{foreach $listNews as $item} 
    <div class = "row">
        {*<div class = "col">
        <a  href="/ViewNews/{$item.id}">
        {$item.id} {$item.name}
        <img src={$item.name} class="img-responsive img-thumbnail">
        </a>
        </div>*}
        <div class = "col">
            <div class = "card">
                <div class = "card-text">
                    <a href="/News/View/{$item.id}" class = "vit-color-gold-logo">
                        <b>{$item.name}</b>
                    </a>
                    <br>
                    {$item.text}
                </div>
                <div class = "card-footer text-right pb-0 pt-0">
                    <span class="small">автор: <b>{getname table ='users' id = $item.users_id}</b> от {$item.data}</span>
                </div>
            </div>
        </div> 
    </div>
    <br>            
{/foreach}
