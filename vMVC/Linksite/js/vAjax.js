
$("#linkname").change(function () { // задаем функцию при нажатиии на элемент <button>
    var getlink = $('#linkname').val();
    alert('getlink');
    $.ajax({
        method: "POST", // метод HTTP, используемый для запроса
        ContentType: 'application/json; charset=utf-8',
        headers: {"Accept-Encoding": "identity"},
        url: "/Linksite/GetParse/", // строка, содержащая URL адрес, на который отправляется запрос

        data: {// данные, которые будут отправлены на сервер
            linkname: getlink
        },
        success: [setFields(msg)],
        statusCode: {
            200: function () { // выполнить функцию если код ответа HTTP 200
                console.log("Ok");
            }
        }
    })
});
function getTDI() {
    var getlink = $('#linkname').val();
    //alert(getlink);
    $.ajax({
        method: "POST", // метод HTTP, используемый для запроса
        contentType: 'application/json',
        url: "/Linksite/GetParse/", // строка, содержащая URL адрес, на который отправляется запрос
        data: JSON.stringify({linkname: getlink}),
        success: function (data) {
            console.log('data', data);
            setFields(data);
        },
        error: function (data) {
            console.log('Error', data);
        },
        statusCode: {
            200: function () { // выполнить функцию если код ответа HTTP 200
                console.log("Ok");
            }
        }
    })
}
;

function setFields(msg) {
    //alert('сработало клик');
    //e.preventDefault();
    var str = JSON.parse(msg);
    //alert(str);
    var textV = document.getElementById('sitetitle');
    textV.value = str.sitetitle;
    var textV = document.getElementById('sitedescription');
    textV.value = str.sitedescription;
    var textV = document.getElementById('siteimage');
    textV.value = str.siteimage;

    sTitle.innerHTML = str.sitetitle;
    sDescription.innerHTML = str.sitedescription;
    sImage.innerHTML = str.siteimage;

}
;

