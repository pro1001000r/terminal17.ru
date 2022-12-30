<?php
/* Smarty version 3.1.34-dev-7, created on 2022-07-23 10:21:06
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Develop/view/DevelopView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62db69221d4e22_84195391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbf620e010a9f1860f0a36233f7ca9fe7ed82ed4' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Develop/view/DevelopView.tpl',
      1 => 1658546451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62db69221d4e22_84195391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Modal/function.ModalShow.php','function'=>'smarty_function_ModalShow',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Modal/function.ModalEnd.php','function'=>'smarty_function_ModalEnd',),4=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),5=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/List/function.vlist.php','function'=>'smarty_function_vlist',),6=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>

<div class="container">
    <div class="row">
        <div class="col">

            <?php echo smarty_function_ModalShow(array('idModal'=>'1','name'=>'Создание новой таблицы'),$_smarty_tpl);?>

            <div class="card vShadow">
                <form role="form" method="post">
                    <div class="form-group">

                        <label for="nameTable">
                            Имя НОВОЙ таблицы
                        </label>
                        <input type="text" class="form-control" id="nameTable" name="nameTable" value="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
" />
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-sm">
                            Создать таблицу
                        </button>
                    </div>
                </form>
            </div>
            <br>
            <?php echo smarty_function_ModalEnd(array(),$_smarty_tpl);?>


            <?php echo smarty_function_button(array('onclick'=>'VitSet()','icon'=>"bi-box-seam"),$_smarty_tpl);?>


            
                <?php echo '<script'; ?>
 type="text/javascript">
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
                <?php echo '</script'; ?>
>
            



            <div class="row">
                <div class="col">

                                        <?php echo smarty_function_button(array('name'=>'Сообщения','href'=>"/Message/List/",'icon'=>"bi-send"),$_smarty_tpl);?>


                    <?php echo smarty_function_button(array('name'=>'Статья','icon'=>'bi-box-seam','href'=>"/Article/Edit/"),$_smarty_tpl);?>

                    <?php echo smarty_function_button(array('name'=>'ObmenSite.epf','icon'=>'bi-box-arrow-down','href'=>"/downloads/ObmenSite.epf",'comment'=>'Скачать Обработку ОбменССайтом'),$_smarty_tpl);?>

                    <?php echo smarty_function_button(array('name'=>'Push','href'=>'/Push/View','icon'=>'bi-box-seam'),$_smarty_tpl);?>

                    <?php echo smarty_function_button(array('name'=>'Чат','href'=>'/Message/List/','icon'=>'bi-chat'),$_smarty_tpl);?>

                    
                    <?php echo smarty_function_button(array('name'=>'Сайт Магазин "Обои','href'=>'http://oboi.vjone.ru','icon'=>'bi-shop','freeParam'=>'target="_blank"'),$_smarty_tpl);?>

                                        <?php echo smarty_function_button(array('name'=>'Построить маршрут в Яндекс.Карты','href'=>'https://yandex.ru/maps/?rtext=~51.708908,94.449417','icon'=>'bi-globe2','freeParam'=>'target="_blank"'),$_smarty_tpl);?>


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
                                    <?php echo smarty_function_vlist(array('table'=>'message'),$_smarty_tpl);?>

                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo smarty_function_ModalShow(array('idModal'=>'3','scroll'=>'','name'=>'tokens'),$_smarty_tpl);?>

            <?php echo smarty_function_vlist(array('table'=>'tokens'),$_smarty_tpl);?>

            <?php echo smarty_function_ModalEnd(array(),$_smarty_tpl);?>


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
                                    <?php echo smarty_function_vlist(array('table'=>'tokens'),$_smarty_tpl);?>

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
                    <?php echo smarty_function_vlist(array('table'=>'logs'),$_smarty_tpl);?>

                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                                    </div>
            </div>
            <br>

                        
                <?php echo '<script'; ?>
 type="text/javascript">
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
                <?php echo '</script'; ?>
>
            
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
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tablesAll']->value, 'itemT', false, 'keyT');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keyT']->value => $_smarty_tpl->tpl_vars['itemT']->value) {
?>
                                <tr>
                                    <td>
                                        <?php echo smarty_function_button(array('href'=>$_smarty_tpl->tpl_vars['keyT']->value,'name'=>$_smarty_tpl->tpl_vars['keyT']->value),$_smarty_tpl);?>

                                        <br>
                                        <?php echo smarty_function_ModalShow(array('idModal'=>$_smarty_tpl->tpl_vars['keyT']->value,'scroll'=>'','name'=>$_smarty_tpl->tpl_vars['keyT']->value),$_smarty_tpl);?>

                                        <?php echo smarty_function_vlist(array('table'=>$_smarty_tpl->tpl_vars['keyT']->value),$_smarty_tpl);?>

                                        <?php echo smarty_function_ModalEnd(array(),$_smarty_tpl);?>

                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['itemT']->value, 'item', false, 'key1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key1']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['key1']->value;?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

                                        </td>
                                    </tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
