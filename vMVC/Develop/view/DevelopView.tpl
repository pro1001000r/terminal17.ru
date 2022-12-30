{header}
{navbar}
<div class="container">
    <div class="row">
        <div class="col">

            {ModalShow idModal='1' name = 'Создание новой таблицы'}
            <div class="card vShadow">
                <form role="form" method="post">
                    <div class="form-group">

                        <label for="nameTable">
                            Имя НОВОЙ таблицы
                        </label>
                        <input type="text" class="form-control" id="nameTable" name="nameTable" value="{$res}" />
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-sm">
                            Создать таблицу
                        </button>
                    </div>
                </form>
            </div>
            <br>
            {ModalEnd}

            {button onclick='VitSet()' icon="bi-box-seam"}

            {literal}
                <script type="text/javascript">
                    function VitSet() {
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
                                    }))
                                    .catch((err) => console.log(err));
                            }



                            setTimeout(notifyMe, 2000);
                            pushproba();
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
                                                console.log(err);
                                            }))
                                            .catch((err) => console.log(err));
                                    }



                                setTimeout(notifyMe, 2000);
                            });
                        }
                    };

                    function notifyMe() {
                        console.log('сработало2');
                        var notification = new Notification("Тестовое Push уведомление получено успешно!!!", {
                            //tag: "ache-mail",
                            body: "Здесь сообщение",
                            icon: "https://vjone.ru/vjlogo.png",
                            //image:"https://vjone.ru/template/images/VitFoto2.jpg",
                            click_action: "https://vjone.ru/linksite/list/",
                        });
                    };


                    function pushproba() {
                        
                        const pushData = {
                            title: 'Example Title.',
                            body: 'Example Body.',
                        };

                        return new Promise((resolve, reject) => {
                                const fakePushEvent = new PushEvent('push', {
                                    data: JSON.stringify(pushData),
                                });

                                // Override waitUntil so we can detect when the notification
                                // has been show by the push event.
                                fakePushEvent.waitUntil = (promise) => {
                                    promise.then(resolve, reject);
                                };

                                self.dispatchEvent(fakePushEvent);
                            })
                            .then(() => {
                                return self.registration.getNotifications();
                            })
                            .then((notifications) => {
                                if (notifications.length !== 1) {
                                    throw new Error('Unexpected number of notifications shown.');
                                }

                                if (notifications[0].title !== pushData.title) {
                                    throw new Error('Unexpected notification title.');
                                }

                                if (notifications[0].body !== pushData.body) {
                                    throw new Error('Unexpected notification body.');
                                }
                            });

                    }


                    $(function() {

                    });
                </script>
            {/literal}



            <div class="row">
                <div class="col">

                    {* Здесь добавляем кнопки *}
                    {button name='Сообщения' href = "/Message/List/" icon="bi-send"}

                    {button name='Статья' icon='bi-box-seam' href="/Article/Edit/"}
                    {button name='ObmenSite.epf' icon='bi-box-arrow-down' href="/downloads/ObmenSite.epf" comment='Скачать Обработку ОбменССайтом'}
                    {button name = 'Push' href = '/Push/View' icon='bi-box-seam'}
                    {button name = 'Чат' href = '/Message/List/' icon='bi-chat'}
                    {* <a class="btn btn-warning" href="http://oboi.vjone.ru" target="_blank"><span
                    class="bi bi-globe2"></span>Магазин "Обои"</a> *}

                    {button name = 'Сайт Магазин "Обои' href = 'http://oboi.vjone.ru' icon='bi-shop' freeParam = 'target="_blank"'}
                    {* <a href="https://yandex.ru/maps/?rtext=~55.659173,37.762848">Построить маршрут в Яндекс.Карты</a> *}
                    {button name = 'Построить маршрут в Яндекс.Карты' href = 'https://yandex.ru/maps/?rtext=~51.708908,94.449417' icon='bi-globe2' freeParam = 'target="_blank"'}

                    <br><br>
                </div>
            </div>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#VitModal1">
                Сообщения
            </button>
            <div class="modal fade" id="VitModal1" data-backdrop="static" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            Сообщения
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col">
                                    {vlist table='message'}
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>

            {ModalShow idModal='3' scroll='' name = 'tokens'}
            {vlist table='tokens'}
            {ModalEnd}

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#VitModal2">
                Токены
            </button>
            <div class="modal fade" id="VitModal2" data-backdrop="static" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            Токены
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col">
                                    {vlist table='tokens'}
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>



            <br>

            <div class="row">
                <div class="col">
                    {vlist table='logs'}
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    {* {vlist table='article'} *}
                </div>
            </div>
            <br>

            {* <button class="btn btn-primary" onclick="ClearBase()">Очистить базу</button> *}
            {literal}
                <script type="text/javascript">
                    function ClearBase() {
                        var fd = new FormData();
                        fd.append('operation', "ClearBase");

                        $.ajax({
                            url: '/CRED/AjaxBase/',
                            data: fd,
                            processData: false,
                            contentType: false,
                            type: 'POST',
                            success: function(data) {
                                alert('База очищена');
                            }
                        });
                    }
                </script>
            {/literal}
            <br><br>

            <div class="row">
                <div class="col">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>
                                    Имя Таблицы
                                </th>
                                <th>
                                    Имя поля
                                </th>
                                <th>
                                    тип поля
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach $tablesAll as $keyT => $itemT}
                                <tr>
                                    <td>
                                        {button href=$keyT name = $keyT}
                                        <br>
                                        {ModalShow idModal=$keyT scroll='' name = $keyT}
                                        {vlist table=$keyT}
                                        {ModalEnd}
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                {foreach $itemT as $key1 => $item}
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            {$key1}
                                        </td>
                                        <td>
                                            {$item}
                                        </td>
                                    </tr>
                                {/foreach}
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{footer}