<div class="small">
    {if (!$usersGuest)}
        <a href="/nomen/edit/{$item.id}" class="vit-color-0">
            <b>{$item.name}</b>
        </a>
    {else}
        <a href="/nomen/view/{$item.id}" class="vit-color-0">
            <b>{$item.name}</b>
        </a>
    {/if}
   
    <br>
    <b>{$item.comment}</b>
 
    <div class="row">
        <div class="col-6">
            <br>
            Категория: {getname table='category' id=$item.category_id}
            <br>
            Код: {$item.code1c}
        </div>
        <div class="col text-center">
            {if ($item.count)}

                <b class="text-success">Есть на складе</b>
                <br>
            {/if}

            <b>{$item.price|vformat:"%d"} </b>
            р./{$item.units}
        </div>
    </div>



    <hr>
</div>