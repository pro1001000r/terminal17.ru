
//Добавляем в корзину
function vSetNomen(id) {
    var fd = new FormData();
    fd.append('nomenid', id);

    //alert(vdata);
    //alert(fd);
    vAjaxsOrder(fd);
}

function vAjaxsOrder(fd) {
    $.ajax({
        url: '/Cart/Ajax/',
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            editNomenButton(data);
        }
    });
}

//Показываем на кнопке количество товаров в корзине
function editNomenButton(msg) {
    var str = JSON.parse(msg);
    $('#nomenspan' + str.id).text('в корзине ' + str.count);
}

function SetOrder(){
    var fd = new FormData();
    fd.append('phone', $('#phone').val());
    fd.append('user', $('#user').val());

    $.ajax({
        url: '/Cart/AjaxCreateOrder/',
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            reloadCart(data);
        }
    });
}

function reloadCart(data){
    alert(data);
    // перезагружаем страничку
    location.reload(); 
}

