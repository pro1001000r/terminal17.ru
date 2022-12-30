<?php

$back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";

if (!empty($_POST['phone']) or !empty($_POST['message'])) {
    $name = trim(strip_tags($_POST['name']));
    $phone = trim(strip_tags($_POST['phone']));
    $mail = trim(strip_tags($_POST['mail']));
    $message = trim(strip_tags($_POST['message']));


    mail(
        'mail@vjone.ru',
        'Письмо с сайта VjOne.ru (Наш сайт)',
        $message . '<br /><br />Телефон: <a href = "tel:' . $phone . '">' . $phone . '</a>',
        "Content-type:text/html;charset=UTF-8"
    );

    // mail(
    //     'vitarttuva3@gmail.com',
    //     'Письмо с сайта',
    //     'Вам написал: ' . $name . '<br />Его номер: <a href = "tel:' . $phone . '">' . $phone . '</a><br />Его почта: ' . $mail . '<br />
    //  Его сообщение: ' . $message,
    //     "Content-type:text/html;charset=UTF-8"
    // );

    echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в 
     ближайшее время<Br> $back";

    exit;
    header("Location: /");
} else {
    //      echo "Для отправки сообщения заполните все поля! $back";
    //      exit;
    header("Location: /");
}
