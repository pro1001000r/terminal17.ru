
<div class="card vShadow">   
    <div class="card-body">
        {if (!$usersGuest)}
            <a href="/nomen/edit/{$item.id}" class = "vit-color-0">
                {$item.name}
            </a>
        {else}
            <a href="/nomen/view/{$item.id}" class = "vit-color-0">
                {$item.name}
            </a>
        {/if}
        <br><br>
        <div class="text-center">   
            {fotoView foto = $item.foto}
        </div>
        <p>
            Категория: {getname table='category' id=$item.category_id}
            <br>
            Код: {$item.code1c}
            {* <br>
            Артикул: {$item.article}
            <br> *}
            {if ($item.count)}
            
                <p>
                 Есть в Наличии!!!   
                </p>
           
            {/if} 
            {* <br>
            qrcode: <br>
            <img src="{$item.qr}" class="img-responsive"> *}
        </p>
        {* {buttonOrder id = $item.id} *}

        <br><br>
        <div class="text-right"> 
            <b>{$item.price|vformat:"%d"} </b>
            р./{$item.units}
        </div>
    </div>
</div>