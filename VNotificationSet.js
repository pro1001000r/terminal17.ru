function notifyMe() {
    console.log('сработало');
    var notification = new Notification("Все еще работаешь?", {
        //tag: "ache-mail",
        body: "Пора сделать паузу и отдохнуть",
        //icon: "https://itproger.com/img/notify.png"
    });
}

function notifSet() {
    if (!('Notification' in window))
        alert("Ваш браузер не поддерживает уведомления.");
    else if (Notification.permission === "granted"){
        //setTimeout(notifyMe, 2000);
        console.log('сработало');}
    else if (Notification.permission !== "denied") {
        Notification.requestPermission(function (permission) {
            if (!('permission' in Notification))
                Notification.permission = permission;
            if (permission === "granted")
                setTimeout(notifyMe, 2000);
        });
    }
}

