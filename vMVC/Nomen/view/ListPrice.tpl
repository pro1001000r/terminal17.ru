<div class = "card shadow">
    <p class="h3 vit-color-gold-logo text-center">Стоимость услуг: </p>
    {foreach $listprice as $item} 
        <div class = "row pt-3">
            <div class = "col ml-2 h5">
                <a href="/Product/View/{$item.id}" class = "vit-color-gold-logo2">
                    {$item.name}
                </a>
            </div>
            <div class = "col text-right mr-2">
                <b>{$item.price|vformat:"%d"} </b>
                р./{$item.unit}
            </div>
        </div> 
    {/foreach}
</div>
