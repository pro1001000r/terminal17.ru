self.addEventListener("install", (event) => {
  console.log("Установлен");
});

self.addEventListener("activate", (event) => {
  console.log("Активирован");
});

self.addEventListener("push", (event) => {
  console.log("Происходит push на сервер");

  // try {
  //   notificationData = event.data.json();
  // } catch (e) {
  //   notificationData = {
  //     title: 'Default title',
  //     body: 'Default message',
  //     icon: '/default-icon.png'
  //   };
  // }

  // console.log(notificationData);

  // event.waitUntil(
  //   self.registration.showNotification(notificationData.title, {
  //     body: notificationData.body,
  //     icon: notificationData.icon
  //   })
  // );
});

self.addEventListener('sync', (event) => {
  console.log("Происходит sync на сервер");
  // if (event.tag == 'event1') {
  //   event.waitUntil(doSomething())
  // }
});

self.addEventListener("fetch", (event) => {
  var sek=10;
  setTimeout(NotifiVit, sek*1000);
});

function NotifiVit() {
  console.log("Запрос Push на сервер");

  cookieStore.get("tokencookie").then((datacookie) => {
    //if (datacookie != null) {
    if (datacookie != null) {
      //Получаем Токен
      //console.log("tokencookie: " + datacookie.value);

      //Запрашиваем сервер через Фетч промис (как аджакс только круче)
      var fd = new FormData();
      fd.append("tokenCookie", datacookie.value);
      fd.append("operation", "GetMessages");

      //var url = "/Message/Ajax/";
      var url = "/VitPush.php";

      fetch(url, {
        method: "post",
        body: fd,
      })
        .then((response) => response.json())
        .then((data) => {
          //В этом промисе обрабатываем ответ с сервера

          //console.log(data);
          if (data != []) {
            for (let i = 0; i < data.length; i++) {
              var vuser = data[i]["user"];
              var vuserfrom = data[i]["userfrom"];
              var vuserfromid = data[i]["userfromid"];
              var vbody = data[i]["comment"];
              var vurl = data[i]["url"];
              var vtitle = "Сообщение для " + vuser + " от " + vuserfrom;
              var vdata = {
                click_action:
                  "https://vjone.ru/Message/List/?userfrom=" + vuserfromid,
              };

              self.registration.showNotification(vtitle, {
                body: vbody,
                data: vdata,
                icon: "https://vjone.ru/vjlogo2.png",
                image: "https://vjone.ru/template/images/Fon12.png",
                tag: vurl,
              });
            }
          }
        })
        .catch((err) => {
          console.log("Ошибка: " + err);
        });
    }
  });
}

//************************************************************************************************** */
self.addEventListener("notificationclick", function (event) {
  const target = event.notification.data.click_action || "/";

  event.notification.close();

  // This looks to see if the current is already open and focuses if it is
  event.waitUntil(
    clients
      .matchAll({
        type: "window",
        includeUncontrolled: true,
      })
      .then(function (clientList) {
        // clientList always is empty?!
        for (var i = 0; i < clientList.length; i++) {
          var client = clientList[i];
          if (client.url === target && "focus" in client) {
            return client.focus();
          }
        }

        return clients.openWindow(target);
      })
  );
});
