<?php
/* Smarty version 3.1.34-dev-7, created on 2022-07-07 05:58:17
  from '/var/www/u1663726/data/www/vjone.ru/vMVC/Start/view/StartIndex.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62c64bc9f2ebb2_02976856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45b7a44228378e565c3a6424c6b026df2cff0266' => 
    array (
      0 => '/var/www/u1663726/data/www/vjone.ru/vMVC/Start/view/StartIndex.tpl',
      1 => 1657162690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c64bc9f2ebb2_02976856 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Header/function.header.php','function'=>'smarty_function_header',),1=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Navbar/function.navbar.php','function'=>'smarty_function_navbar',),2=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/FotoViewCarousel/function.fotoViewCarousel.php','function'=>'smarty_function_fotoViewCarousel',),3=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/template/plugins/function.mail.php','function'=>'smarty_function_mail',),4=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Button/function.button.php','function'=>'smarty_function_button',),5=>array('file'=>'/var/www/u1663726/data/www/vjone.ru/vAtoms/Footer/function.footer.php','function'=>'smarty_function_footer',),));
echo smarty_function_header(array(),$_smarty_tpl);?>

<?php echo smarty_function_navbar(array(),$_smarty_tpl);?>


<div class="container-fluid">
    <div class="row">
        <div class="col">
            <br>
            
                                </div>
    </div>
    <div class="row">
        <div class="col text-center" id="R0">
            <video autoplay loop muted class="bgvideo" id="bgvideo">
                <source src="/upload/video/formula.mp4" type="video/mp4">
                </source>
            </video>
            <div class='vit-font-1 vit-background-opacity'
                style="margin-left: -15px; margin-right: -15px; margin-bottom: -1%; margin-top: -25px;">
                <br>
                <img class="img-responsive img-fluid" src="/vjlogo.png" alt="Логотип" />
                <br>
                <h1>1С в Кызыле</h1>
                <h2>Консультации,<br>
                Внедрение,<br>
                Доработка<br>
                а также: создание сайтов,<br>
                интернет-магазинов<br>
                под управлением продуктов<br>
                фирмы 1С
                </h2>
                <br>
            </div>

        </div>
    </div>
    <br>
    <div class="row">
        <div class="col text-center">
            <div class="h1 vit-font-1 vit-color-0">
                Как это работает:
            </div>
        </div>
    </div>

    <?php echo smarty_function_fotoViewCarousel(array('table'=>'banner','id'=>'1'),$_smarty_tpl);?>

    <br>

    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-body">
                    <p h2>
                        Сайт написан с нуля<br>
                        с применением модифицированной технологии MVC,<br>
                        весь контент заполняется из программы<br>
                        1С:"Управление небольшой фирмой", 1С:"Розница" либо<br>
                        1С:"Управление торговлей 11"<br>
                    </p>
                </div>
            </div>
        </div>
    </div>



        <br>

        <br>
    <div class="row" id="R2">
        <div class="col-10 offset-1">
            <div class="card text-center" style="box-shadow: 0 0 10px rgba(0,0,0,0.5)">
                <?php echo smarty_function_mail(array(),$_smarty_tpl);?>

            </div>
            <br>
        </div>
    </div>

    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-body">
                    <p h2>
                        Разработчик
                        <br>

                        <img class="img-responsive img-fluid" src="/template/images/Fon12.png" alt="Создание сайтов" />
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row vit-color-0">
        <div class="col offset-1 " id="R4">
            <p>
                <br>
                КОНТАКТЫ:
                <br>
                <span class="glyphicon glyphicon-home"></span>&nbsp;&copy; Виталий Якурнов, Россия
                <br>
                <a href="mailto:pro1001000r@ya.ru" class="vit-color-0">
                    <span class="glyphicon glyphicon-envelope"></span>
                    pro1001000r@ya.ru
                </a>
                <br>
                                <?php echo smarty_function_button(array('name'=>'Построить маршрут в Яндекс.Карты','href'=>'https://yandex.ru/maps/?rtext=~51.720638,94.444527','icon'=>'bi-globe2','freeParam'=>'target="_blank"'),$_smarty_tpl);?>


            </p>
            <div class="d-none">

            </div>
        </div>
    </div>
</div>

<?php echo smarty_function_footer(array(),$_smarty_tpl);
}
}
