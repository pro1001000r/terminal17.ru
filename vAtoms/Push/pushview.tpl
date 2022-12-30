<div class="card vShadow">
    <div class=" card-body text-center">


        <form action="" method="post" class="col s12" id="FormVit">
            <p class="h5">Управление Push уведомлениями</p>
            <p>
                Push нужны для получения сообщений о состоянии заказов<br>
                (чтобы не отслеживать вручную)
            </p>
            <p class=" small" id="vbrowser">{$vbrowser}</p>
            <p class=" small" id="tokencookie">Токен Cookie не получен</p>
            <p class=" small" id="token"> Токен Push не получен</p>
            <p id="message"></p>
            <button type="button" class="btn btn-info" id="register">Зарегистрировать Token</button>
            <button type="button" class="btn btn-danger" id="delete">Удалить Token</button>
            <button type="button" class="btn btn-primary" id="send">Отправить тестовое уведомление</button>
        </form>
    </div>
</div>

{literal}
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-messaging.js"></script>
    <script src="/vAtoms/Push/pushVit.js" type="text/javascript"></script>
{/literal}