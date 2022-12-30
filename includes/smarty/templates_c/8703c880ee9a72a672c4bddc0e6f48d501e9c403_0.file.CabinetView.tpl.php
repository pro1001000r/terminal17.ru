<?php
/* Smarty version 3.1.34-dev-7, created on 2022-07-23 09:27:06
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Cabinet/view/CabinetView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62db94babf3649_87191084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8703c880ee9a72a672c4bddc0e6f48d501e9c403' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Cabinet/view/CabinetView.tpl',
      1 => 1658557621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62db94babf3649_87191084 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Modal/function.ModalShow.php','function'=>'smarty_function_ModalShow',),4=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vMVC/Clients/plugins/function.listtask.php','function'=>'smarty_function_listtask',),5=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Modal/function.ModalEnd.php','function'=>'smarty_function_ModalEnd',),6=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Orders/function.orders.php','function'=>'smarty_function_orders',),7=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <p class="text-center">
                    Кабинет пользователя <b><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</b><br>
                    Cтатус:
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['status'] == 'S') {?>
                        Супервизор
                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['status'] == 'A') {?>
                        Администратор
                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['status'] == 'W') {?>
                        Сотрудник
                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['status'] == 'U') {?>
                        Пользователь
                    <?php }?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 padding-right">
                <?php echo smarty_function_button(array('href'=>'Task','name'=>'Задачи','icon'=>"bi-clipboard-check"),$_smarty_tpl);?>

                
                <?php echo smarty_function_button(array('name'=>'Номенклатура','href'=>'/nomen/list/','icon'=>"bi-box-seam"),$_smarty_tpl);?>

                <?php echo smarty_function_button(array('name'=>'Чат','href'=>"/Message/List/",'icon'=>"bi-chat"),$_smarty_tpl);?>

                <?php echo smarty_function_button(array('name'=>'Статьи','icon'=>'glyphicon glyphicon-book','href'=>"/Article/List/"),$_smarty_tpl);?>

                                                
                <?php echo smarty_function_ModalShow(array('idModal'=>'2','scroll'=>'','name'=>'Задачи','icon'=>"bi-clipboard-check"),$_smarty_tpl);?>

                <?php echo smarty_function_listtask(array(),$_smarty_tpl);?>

                <?php echo smarty_function_ModalEnd(array(),$_smarty_tpl);?>


                <?php echo smarty_function_ModalShow(array('idModal'=>'3','scroll'=>'','name'=>'Заказы'),$_smarty_tpl);?>

                <?php echo smarty_function_orders(array(),$_smarty_tpl);?>

                <?php echo smarty_function_ModalEnd(array(),$_smarty_tpl);?>


                <br>
                <?php echo smarty_function_button(array('name'=>'Установить сервис воркер (Push)','onclick'=>'VitSetPush()','icon'=>"bi-envelope-open-fill"),$_smarty_tpl);?>

                <?php echo smarty_function_button(array('name'=>'Удалить сервис воркер (Push)','onclick'=>'VitDeletePush()','icon'=>"bi-envelope-open-fill"),$_smarty_tpl);?>


            </div>
        </div>
        
            <?php echo '<script'; ?>
 type="text/javascript">
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
            <?php echo '</script'; ?>
>
        


    </div>
</section>

<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
