importScripts('https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js');
// importScripts('/firebase-app.js');

// If you enabled Analytics in your project, add the Firebase SDK for Google Analytics
importScripts('https://www.gstatic.com/firebasejs/8.10.0/firebase-analytics.js');

// Add Firebase products that you want to use
importScripts('https://www.gstatic.com/firebasejs/8.10.0/firebase-auth.js');
//import { firestore } from 'https://www.gstatic.com/firebasejs/9.8.2/firebase-firestore.js'

//importScripts('https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js');
//importScripts('https://www.gstatic.com/firebasejs/4.2.0/firebase.js');
importScripts('https://www.gstatic.com/firebasejs/8.10.0/firebase-messaging.js');
// importScripts('/firebase-messaging.js');

const config = {
  apiKey: "AIzaSyDJbIeZQ58gUFYotOWMyDBOnP-ZlyZfxDo",
  authDomain: "vitartpush.firebaseapp.com",
  projectId: "vitartpush",
  storageBucket: "vitartpush.appspot.com",
  messagingSenderId: "487218904228",
  appId: "1:487218904228:web:9336554084396a64257a31",
  measurementId: "G-QCRDB32550"
};
//инициализируем подключение к FCM
firebase.initializeApp(config);
const messaging = firebase.messaging();

var keyvit2 = 'BC1NroXoY3BG2VFYqS4lyJua7PHXc18uKzAOoRxvTu9answ3JMwkjSS52m3a83OK6IRI0R4HOpYfvQS5CRVw2Us';

messaging.usePublicVapidKey(keyvit2);

//*********************************************************************************** */

messaging.onBackgroundMessage((payload) => {
  payload.data.data = JSON.parse(JSON.stringify(payload.data));

  return self.registration.showNotification(payload.data.title, payload.data);
});

// Customize notification handler
messaging.setBackgroundMessageHandler(function (payload) {
  console.log('Handling background message', payload);

  // Copy data object to get parameters in the click handler
  payload.data.data = JSON.parse(JSON.stringify(payload.data));

  return self.registration.showNotification(payload.data.title, payload.data);
});

/*messaging.setBackgroundMessageHandler(function(payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  const notificationTitle = 'Background Message Title';
  const notificationOptions = {
      body: 'Background Message body.',
      icon: '/Content/Img/logo-amezze-120.png'
  };

  return self.registration.showNotification(notificationTitle,
      notificationOptions);
});*/
//************************************************************************************************** */
self.addEventListener('notificationclick', function (event) {
  const target = event.notification.data.click_action || '/';
  event.notification.close();

  // This looks to see if the current is already open and focuses if it is
  event.waitUntil(clients.matchAll({
    type: 'window',
    includeUncontrolled: true
  }).then(function (clientList) {
    // clientList always is empty?!
    for (var i = 0; i < clientList.length; i++) {
      var client = clientList[i];
      if (client.url === target && 'focus' in client) {
        return client.focus();
      }
    }

    return clients.openWindow(target);
  }));
});
