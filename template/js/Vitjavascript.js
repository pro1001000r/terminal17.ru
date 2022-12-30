//
//$(function () {
////    $("#carouselVit").carousel({
////        interval: false
////    });
//});

$("#BtnUp").on('click', function (event) {
    // отменяем стандартное действие
    event.preventDefault();
    $('html, body').animate({scrollTop: 0}, 500);
    //сворачиваем меню
    //$(".navbar-collapse").collapse('hide');
});

//$("#BtnUp").on('click', function() {
//    //event.preventDefault();
//    
//    let sc = $(this).attr('href');
//    dn = $(sc).offset().top;
//    $('html, body').animate({
//        scrollTop: dn-80
//    });
//    return false;
//});

//плавный переход
//$(function () {
//    $('a[href*="/#"]').on('click', function (event) {
//        // отменяем стандартное действие
//        event.preventDefault();
//        var sc = $(this).attr("href"),
//                dn = $(sc).offset().top;
//        $('html, body').animate({scrollTop: dn - 80}, 1000);
//        //сворачиваем меню
//        $(".navbar-collapse").collapse('hide');
//    });
//    if ($(".navbar-collapse").on('active') == False) {
//        $(".navbar-collapse").collapse('hide');
//    }
//});

$("#my_image_button").change(function () {
    if ($(this).val() !== '') {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#vit_image').attr('src', e.target.result);
        };
        reader.readAsDataURL($(this)[0].files[0]);
    };
});

$(document).mouseup(function (e) {
    var container = $('.navbar-collapse');
    if (container.has(e.target).length === 0) {
        container.collapse('hide');
    }
});
//-------------------Ajax----------------------------
// 
// Описываем общие установки для всех ajax-запросов
//$.ajaxSetup({
//    url: "/components/VAjax.php", // путь к php-обработчику
//    type: 'POST', // метод передачи данных
//    dataType: 'json', // тип ожидаемых данных в ответе
//    beforeSend: function () { // Функция вызывается перед отправкой запроса
//        output.text('Запрос отправлен. Ждите ответа.');
//    },
//    error: function (req, text, error) { // отслеживание ошибок во время выполнения ajax-запроса
//        output.text('Хьюстон, У нас проблемы! ' + text + ' | ' + error);
//    },
//    complete: function () { // функция вызывается по окончании запроса
//        output.append('<p>Запрос полностью завершен!</p>');
//    }
//});

//function getdetails() {
//    var name = $('#vtext').val();
//    $("#vlabel").text(" Вывод строки из PHP: ");
//    $.ajax({
//        url: "/components/VAjax.php", // путь к php-обработчику
//        type: 'POST', // метод передачи данных
//        data: {Vitproba: name}
//    }).done(function (result)
//    {
//        $("#vlabel").text(" Вывод строки из PHP: " + result);
//    });
//};
//
//$(function () {
//    var output = $('#output');
//    $("#vtext").text(" Вывод строки из PHP: ");
//
//    $('a[href^="#"]').on('click', function (event) {
//        // отменяем стандартное действие
//        event.preventDefault();
//        var sc = $(this).attr("href"),
//                dn = $(sc).offset().top;
//        $('html, body').animate({scrollTop: dn - 80}, 1000);
//        //сворачиваем меню
//        $(".navbar-collapse").collapse('hide');
//    });
//    if ($(".navbar-collapse").on('active') == False) {
//        $(".navbar-collapse").collapse('hide');
//    }
//    ;
//
//    $('#Vsubmit').click(function () {
//        alert('Ghjdthrf');
//        getdetails();
//    });
//
//    $('#btn1').on('click', function () {
//        // Теперь, вся запись любого запроса, будет сводится 
//        // к параметрам data и success: данные, которые передаём 
//        // и обработка ответа от сервера
//        $.ajax({
//            data: {key: 1}, // данные, которые передаем на сервер
//            success: function (json) { // функция, которая будет вызвана в случае удачного завершения запроса к серверу
//                output.html(json);
//            }
//        });
//    });
//});
