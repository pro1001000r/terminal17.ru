
function vNew() {
    $('#main').submit(function (e) {
        e.preventDefault();
        var vdata = $('#main').serialize();
        vdata = vdata + '&submitNew=1';
        //alert(vdata);
        vAjaxs(vdata);
    })
}
function vEdit() {
    $('#main').submit(function (e) {
        e.preventDefault();
        var vdata = $('#main').serialize();
        vdata = vdata + '&submitEdit=1';
        //alert(vdata);
        vAjaxs(vdata);
    })
}
function vDelete() {
    if (confirm("Точно нужно удалить?")) {
        $('#main').submit(function (e) {
            e.preventDefault();
            var vdata = $('#main').serialize();
            vdata = vdata + '&submitDelete=1';
            //alert(vdata);
            vAjaxs(vdata);
        });
    } else {
        alert("Oтмена удаления");
    }

}

$('#submitFoto').change(function () {
    //alert('вход в js');

    let tablename = $('#tablename').val();
    let tableid = $('#tableid').val();

    var fd = new FormData();
    fd.append('operation', "NewFiles");
    fd.append('tablename', tablename);
    fd.append('tableid', tableid);
    let file_data = $(this)[0].files;
    for (var x = 0; x < file_data.length; x++) {
        fd.append('files[' + x + ']', file_data[x]);
    }

    //alert(fd);
    $.ajax({
        url: '/CRED/AjaxFoto/',
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            alert('Сохранено');
            Location.reload();
        }
    });
});

function vEditFoto(id) {
    let vdata = $('#main').serialize();
    vdata = vdata + '&idfoto=' + id
    alert(vdata);
}
;

function vRotateRightFoto(id) {
    $('#main').submit(function (e) {
        e.preventDefault();

        var fd = new FormData();
        fd.append('operation', "RotateRightFoto");
        fd.append('idfoto', id);

        //alert(vdata);
       // alert(fd);
        vAjaxsFoto(fd);
    });
}
;

function vRotateLeftFoto(id) {
    $('#main').submit(function (e) {
        e.preventDefault();

        var fd = new FormData();
        fd.append('operation', "RotateLeftFoto");
        fd.append('idfoto', id);

        //alert(vdata);
        //alert(fd);
        vAjaxsFoto(fd);
    });
}
;

function vMainFoto(id) {
    $('#main').submit(function (e) {
        e.preventDefault();

        var fd = new FormData();
        fd.append('operation', "MainFoto");
        fd.append('tablename', $('#tablename').val());
        fd.append('tableid', $('#tableid').val());
        fd.append('idfoto', id);

        //alert(vdata);
        //alert(fd);
        vAjaxsFoto(fd);
    });
}
;
function vDeleteFoto(id) {
    if (confirm("Точно нужно удалить?")) {
        $('#main').submit(function (e) {
            e.preventDefault();
//            var vdata = $('#main').serialize();
//            vdata = vdata + '&submitDeleteFoto=1&idfoto' + id;

            var fd = new FormData();
            fd.append('operation', "DeleteFoto");
            fd.append('tablename', $('#tablename').val());
            fd.append('tableid', $('#tableid').val());
            fd.append('idfoto', id);

            //alert(vdata);
            //alert(fd);
            vAjaxsFoto(fd);
        });
    } else {
        alert("Oтмена удаления");
    }

}

function vAjaxsFoto(fd) {
    $.ajax({
        url: '/CRED/AjaxFoto/',
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            alert(data);
            location.reload(); 
        }
    });
}


function vAjaxs(vdata) {
//var vdata = data;
    $.ajax({
        type: "POST", // метод HTTP, используемый для запроса
//            contentType: 'application/json',
        url: "/CRED/Ajax/", // строка, содержащая URL адрес, на который отправляется запрос
        data: vdata,
        success: function (data) {
            //alert(data);
            setFields2(data);
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


function setFields2(msg) {
//alert(msg);
//e.preventDefault();
    var str = JSON.parse(msg);
    alert(str.mess);
    switch (str.operation) {
        case 'New':
            // var vId = document.getElementById('id');
            // vId.value = str.id;
            //var vId = document.getElementById('tableid');
            //vId.value = str.id;
            document.location.href = "https://vjone.ru" + str.loc;
            break;
        case 'Edit':

            break;
        case 'Delete':
            document.location.href = "https://vjone.ru" + str.loc;
            break;
        default:
            alert("Нет таких значений");
    }

}
;


