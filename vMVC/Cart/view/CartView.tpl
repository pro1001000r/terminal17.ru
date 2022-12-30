{header}
{navbar}
<div class="container">
    <br>
    {if $orderNull}
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <h1>
                        Корзина пуста
                    </h1>
                </div>
            </div>
        </div>
    {else}
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <h1>
                        Корзина товаров
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped table-condensed">
                    <tr>
                        <th>id</th>
                        <th>code1c</th>
                        <th>name</th>
                        <th>count</th>
                        <th>price</th>
                        <th>sum</th>
                    </tr>
                    {foreach $order as $item}
                        <tr>
                            <td>{$item.id}</td>
                            <td></td>
                            <td>
                                <a class="" href="/Nomen/Edit/{$item.id}">
                                    {$item.name}
                                </a>
                            </td>
                            <td>{$item.count}</td>
                            <td>{$item.price}</td>
                            <td>{$item.sum}</td>
                        </tr>
                    {/foreach}
                </table>
            </div>
        </div>
        {button name='очистить корзину' href="/Cart/Clear/"}
        <div class="row">
            <div class="col-8 offset-2">
                <div class="text-center">
                    <input type="text" id="phone" name="phone" maxlength="30" class="form-control" value=""
                        placeholder="Введите номер телефона">
                    {if ($user<>'')}
                        {* {getname table='users' id=$user} *}
                    {/if}
                    <input type="text" id="user" name="user" maxlength="30" class="form-control" value="{$user}"
                        hidden="true">

                </div>
            </div>
            <div class="col-8 offset-2">
                <p class="small">
                    Нажимая на кнопку "Оформить заказ", вы даете согласие
                    на обработку персональных данных и соглашаетесь c
                    <a href="/confidence/" target="_blank">политикой конфиденциальности</a>
                </p>
                <div class="text-center">
                    <button class="btn btn-primary" onclick="SetOrder()">Оформить заказ</button>
                </div>
            </div>
        </div>
        {literal}
            <script type="text/javascript">
                function SetOrder() {
                    var fd = new FormData();
                    fd.append('SetOrder', 1);
                    fd.append('phone', $('#phone').val());
                    fd.append('user', $('#user').val());

                    $.ajax({
                        url: '/Cart/Ajax/',
                        data: fd,
                        processData: false,
                        contentType: false,
                        type: 'POST',
                        success: function(data) {
                            reloadCart(data);
                        }
                    });
                }

                function reloadCart(data) {
                    alert(data);
                    // перезагружаем страничку
                    location.reload();
                }
            </script>
        {/literal}

    {/if}
    <br>
    {orders}
</div>

{footer}