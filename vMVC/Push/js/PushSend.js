function PushSend() {

    var users_id = $('#users_id').val();
    var title = $('#name1').val();
    var body = $('#name2').val();

    var notification = {};
    /*form.find('input').each(function () {
        var input = $(this);
        notification[input.attr('name')] = input.val();
    });*/
    notification['title'] = title;
    notification['body'] = body;
    notification['click_action'] = "https://vjone.ru/linksite/list/";
    notification['icon'] = "https://vjone.ru/android-chrome-192x192.png";
    //notification['image'] = "https://vjone.ru/template/images/VitFoto2.jpg";

    console.log('Send notification', notification);

    var data = false;
    var fd = new FormData();
    fd.append('PushGet', true);
    fd.append('users_id', users_id);
    $.ajax({
        url: '/Push/Ajax/',
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            console.log('Получены записи токенов устройств получателя...' + data);
            data = JSON.parse(data);
            $.each(data, function (index, value) {
                console.log('текуший токен: ' + value.push);

                PuhsendFetch(value.push, notification);

            });
        }
    });



}

function PuhsendFetch(tokenTo, notification) {

    var keyvit = 'AAAAcXCCfKQ:APA91bG7sgThz5HeE8FBS8zQL0tYAIz8fc-6ol_wJ77f2slcIFJR9uzfCxUG8PUYS2j_4l8qrawF6lwB5bAO9iegq0FjZSUy7mAe0a8fUIB2M1rxVznTVlJfKfrZqQttIgpojheN_EUy';
    var keyvit2 = 'BC1NroXoY3BG2VFYqS4lyJua7PHXc18uKzAOoRxvTu9answ3JMwkjSS52m3a83OK6IRI0R4HOpYfvQS5CRVw2Us';
    var keyvit3 = 'AIzaSyDJbIeZQ58gUFYotOWMyDBOnP-ZlyZfxDo';
    
    //todo Здесь добавить cохранение в базе message

    fetch('https://fcm.googleapis.com/fcm/send', {
        method: 'POST',
        headers: {
            'Authorization': 'key=' + keyvit,
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            // Firebase loses 'image' from the notification.
            // And you must see this: https://github.com/firebase/quickstart-js/issues/71
            data: notification,
            to: tokenTo
        })
    }).then(function (response) {
        return response.json();
    }).then(function (json) {
        console.log('Response', json);
    }).catch(function (error) {
        showError(error);
    });
}

function showError(error, error_data) {

    if (typeof error_data !== "undefined") {
        console.error(error, error_data);
    } else {
        alert_message.html(error);
        console.error(error);
    }
}