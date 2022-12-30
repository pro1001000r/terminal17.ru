//Настройки FCM
//https://console.firebase.google.com/u/1/
const config = {
    apiKey: "AIzaSyDJbIeZQ58gUFYotOWMyDBOnP-ZlyZfxDo",
    authDomain: "vitartpush.firebaseapp.com",
    projectId: "vitartpush",
    storageBucket: "vitartpush.appspot.com",
    messagingSenderId: "487218904228",
    appId: "1:487218904228:web:9336554084396a64257a31",
    measurementId: "G-QCRDB32550"
};

//C:\Users\MSI\Desktop\vjone.ru\vMVC\Cabinet\js\pushVit.js
// переменные формы
var token = $('#token');
var alert_message = $('#alert-message');
var bt_register = $('#register');
var bt_delete = $('#delete');

// ключи
var keyvit = 'AAAAcXCCfKQ:APA91bG7sgThz5HeE8FBS8zQL0tYAIz8fc-6ol_wJ77f2slcIFJR9uzfCxUG8PUYS2j_4l8qrawF6lwB5bAO9iegq0FjZSUy7mAe0a8fUIB2M1rxVznTVlJfKfrZqQttIgpojheN_EUy';
var keyvit2 = 'BC1NroXoY3BG2VFYqS4lyJua7PHXc18uKzAOoRxvTu9answ3JMwkjSS52m3a83OK6IRI0R4HOpYfvQS5CRVw2Us';
var keyvit3 = 'AIzaSyDJbIeZQ58gUFYotOWMyDBOnP-ZlyZfxDo';
var keyvit4 = 'AIzaSyDJbIeZQ58gUFYotOWMyDBOnP-ZlyZfxDo';

//инициализируем подключение к FCM
firebase.initializeApp(config);
var messaging = firebase.messaging();
messaging.usePublicVapidKey(keyvit2);

if (
    'Notification' in window &&
    'serviceWorker' in navigator &&
    'localStorage' in window &&
    'fetch' in window &&
    'postMessage' in window
) {

    // Если ВСЕГДА granted
    if (Notification.permission === 'granted') {
        getToken();
    }

    // Регистрация токена
    bt_register.on('click', function () {
        getToken();
    });

    bt_delete.on('click', function () {
        // Delete Instance ID token.
        messaging.getToken()
            .then(function (currentToken) {
                messaging.deleteToken(currentToken)
                    .then(function () {
                        console.log('Token deleted');
                        setTokenSentToServer(false);
                    })
                    .catch(function (error) {
                        showError('Unable to delete token', error);
                    });
            })
            .catch(function (error) {
                showError('Error retrieving Instance ID token', error);
            });
    });

    // jnghfdrf
    $("#FormVit").on('submit', function (event) {
        event.preventDefault();

        var notification = {};
        /*form.find('input').each(function () {
            var input = $(this);
            notification[input.attr('name')] = input.val();
        });*/
        notification['title'] = "ТЕСТОВОЕ УВЕДОМЛЕНИЕ!!!";
        notification['body'] = "Cсылка на сайт vjone.ru :)";
        notification['click_action'] = "https://vjone.ru/linksite/list/";
        notification['icon'] = "https://vjone.ru/vjlogo.png";
        notification['image'] = "https://vjone.ru/template/images/VitFoto2.jpg";

        sendNotification(notification);
    });

    // handle catch the notification on current page
    messaging.onMessage(function (payload) {
        console.log('Message received', payload);
        info.show();
        info_message
            .text('')
            .append('<strong>' + payload.data.title + '</strong>')
            .append('<em>' + payload.data.body + '</em>')
            ;
        // register fake ServiceWorker for show notification on mobile devices
        navigator.serviceWorker.register('/firebase-messaging-sw.js');
        Notification.requestPermission(function (permission) {
            if (permission === 'granted') {
                navigator.serviceWorker.ready.then(function (registration) {
                    // Copy data object to get parameters in the click handler
                    payload.data.data = JSON.parse(JSON.stringify(payload.data));

                    registration.showNotification(payload.data.title, payload.data);
                }).catch(function (error) {
                    // registration failed :(
                    showError('ServiceWorker registration failed', error);
                });
            }
        });
    });

    // Callback fired if Instance ID token is updated.
    messaging.onTokenRefresh(function () {
        messaging.getToken()
            .then(function (refreshedToken) {
                // Send Instance ID token to app server.
                sendTokenToServer(refreshedToken);
            })
            .catch(function (error) {
                showError('Unable to retrieve refreshed token', error);
            });
    });

} else {
    if (!('Notification' in window)) {
        showError('Notification not supported');
    } else if (!('serviceWorker' in navigator)) {
        showError('ServiceWorker not supported');
    } else if (!('localStorage' in window)) {
        showError('LocalStorage not supported');
    } else if (!('fetch' in window)) {
        showError('fetch not supported');
    } else if (!('postMessage' in window)) {
        showError('postMessage not supported');
    }

}

// Показываем ошибки в кабинете
function showError(error, error_data) {
    if (typeof error_data !== "undefined") {
        alert_message.html(error + '<br><pre>' + JSON.stringify(error_data) + '</pre>');
    } else {
        alert_message.html(error);
    }
}

function getToken() {
    messaging.requestPermission()
        .then(function () {
            // Get Instance ID token. Initially this makes a network call, once retrieved
            // subsequent calls to getToken will return from cache.
            //messaging.getToken( { vapidKey: keyvit2 })
            messaging.getToken()
                .then(function (currentToken) {

                    if (currentToken) {
                        sendTokenToServer(currentToken);
                        token.text(currentToken);
                    } else {
                        showError('No Instance ID token available. Request permission to generate one');
                        setTokenSentToServer(false);

                    }
                })
                .catch(function (error) {
                    showError('An error occurred while retrieving token', error);
                    setTokenSentToServer(false);
                });
        })
        .catch(function (error) {
            showError('Unable to get permission to notify', error);
        });
}

function sendNotification(notification) {

    var token1 = window.localStorage.getItem('sentFirebaseMessagingToken');

    messaging.getToken()
        .then(function (currentToken) {
            fetch('https://fcm.googleapis.com/fcm/send', {
                method: 'POST',
                headers: {
                    'Authorization': 'key=' + keyvit,
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    data: notification,
                    to: token1
                })
            }).then(function (response) {
                return response.json();
            }).then(function (json) {

            }).catch(function (error) {
                showError(error);
            });
        })
        .catch(function (error) {
            showError('Error retrieving Instance ID token', error);
        });
}

// Send the Instance ID token your application server, so that it can:
// - send messages back to this app
// - subscribe/unsubscribe the token from topics
function sendTokenToServer(currentToken) {
    if (!isTokenSentToServer(currentToken)) {
        setTokenSentToServer(currentToken);
    }
    token.text(currentToken);
}

function isTokenSentToServer(currentToken) {
    return window.localStorage.getItem('sentFirebaseMessagingToken') === currentToken;
}

function setTokenSentToServer(currentToken) {
    if (currentToken) {
        window.localStorage.setItem('sentFirebaseMessagingToken', currentToken);
    } else {
        window.localStorage.removeItem('sentFirebaseMessagingToken');
    }
}

