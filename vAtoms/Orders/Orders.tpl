<div class="text-center h3">
    Ваши заказы
</div>
<div class="row">
    <div class="col">
        {foreach $orderPast as $itemPast}
            <div class="card my-2 mx-2 vShadow">
                Заказ {$itemPast.id} {$itemPast.date} тел:{$itemPast.phone} <b>{$itemPast.statusname}</b>
                <div class="small">
                    {foreach $itemPast['prods'] as $itemProds}
                        Товар {$itemProds->id} {$itemProds->code1c} <b>"{$itemProds->name}"</b> цена: <b>{$itemProds->price}</b>
                        количество: {$itemProds->count} сумма: <b>{$itemProds->sum}</b>
                        <br>
                    {/foreach}
                    Сумма заказа: <b>{$itemPast.summa} р.</b>
                </div>
            </div>
        {/foreach}
    </div>
</div>