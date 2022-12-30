{header}
{navbar}
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <p class="text-center">
                    Кабинет пользователя <b>{$user.name}</b><br>
                    Cтатус:
                    {if $user.status == 'S'}
                        Супервизор
                    {elseif $user.status == 'A'}
                        Администратор
                    {elseif $user.status == 'W'}
                        Сотрудник
                    {elseif $user.status == 'U'}
                        Пользователь
                    {/if}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 padding-right">
                {button href='Task' name='Задачи' icon="bi-clipboard-check"}
                {* {button href='/Push/Send/' name='Push' icon='bi-envelope-open-fill'} *}

                {button name='Номенклатура' href='/nomen/list/' icon="bi-box-seam"}
                {button name='Чат' href = "/Message/List/" icon="bi-chat"}
                {button name='Статьи' icon='glyphicon glyphicon-book' href="/Article/List/"}
                {* {button href='Clients' name='Клиенты'} *}
                {* {ModalShow idModal='1' scroll=''} *}
                {* {ModalShow idModal='1' scroll='' name = 'Pushmanager'}
                {pushmanager}
                {ModalEnd} *}

                {ModalShow idModal='2' scroll='' name = 'Задачи' icon="bi-clipboard-check"}
                {listtask}
                {ModalEnd}

                {ModalShow idModal='3' scroll='' name = 'Заказы'}
                {orders}
                {ModalEnd}

                <br>
                {button name='Установить сервис воркер (Push)' onclick='VitSetPush()' icon="bi-envelope-open-fill"}
                {button name='Удалить сервис воркер (Push)' onclick='VitDeletePush()' icon="bi-envelope-open-fill"}

            </div>
        </div>
        {literal}
            <script type="text/javascript">
                function notifyMe() {
                    //console.log('сработало2');
                    var notification = new Notification("Push Зарегистрировано", {
                        //tag: "ache-mail",
                        body: "Сообщения приходят успешно",
                        icon: "https://vjone.ru/vjlogo.png",
                        //image:"https://vjone.ru/template/images/VitFoto2.jpg",
                        click_action: "https://vjone.ru/linksite/list/",
                    });
                };

                //Усранавливаем Сервис воркер
                function VitSetPush() {
                    if (!("Notification" in window))
                        alert("Ваш браузер не поддерживает уведомления.");
                    else if (Notification.permission === "granted") {
                        // Проверка того, что наш браузер поддерживает Service Worker API.
                        if ('serviceWorker' in navigator) {
                            // Весь код регистрации у нас асинхронный.
                            navigator.serviceWorker.register('/VitNotification.js')
                                .then(() => navigator.serviceWorker.ready.then((worker) => {
                                    //worker.sync.register('13246489');
                                    //console.log(err);
                                    setTimeout(notifyMe, 2000);
                                }))
                                .catch((err) => console.log(err));
                        }



                        setTimeout(notifyMe, 2000);
                        console.log('сработало1');
                    } else if (Notification.permission !== "denied") {
                        Notification.requestPermission(function(permission) {
                            if (!('permission' in Notification))
                                Notification.permission = permission;
                            if (permission === "granted")

                                // Проверка того, что наш браузер поддерживает Service Worker API.
                                if ('serviceWorker' in navigator) {
                                    // Весь код регистрации у нас асинхронный.
                                    navigator.serviceWorker.register('/VitNotification.js')
                                        .then(() => navigator.serviceWorker.ready.then((worker) => {
                                            //worker.sync.register('13246489');
                                            //console.log(err);
                                            //setTimeout(notifyMe, 2000);
                                        }))
                                        .catch((err) => console.log(err));
                                }

                            setTimeout(notifyMe, 2000);
                            console.log('сработало3');
                        });
                    }
                };

                //Удаляем Сервис воркер
                function VitDeletePush() {
                    navigator.serviceWorker.getRegistrations().then(function(registrations) {
                        for (let registration of registrations) {
                            registration.unregister();
                            console.log('Удален сервис воркер');
                            console.log(registration);
                        };
                    });
                };
            </script>
        {/literal}


    </div>
</section>

{footer}