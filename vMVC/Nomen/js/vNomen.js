function vSelectCategory(id,name) {
    $('#cattreeid').val(id);
    $('#categoryName').html(name);
    //$('#buttoncategory').click();
    
    var fd = new FormData();
    fd.append('category', id);

    //alert(vdata);
    //alert(id);
    vAjaxsNomen(fd);
}

function vPagenation(id) {
    var category = $('#cattreeid').val();
    var fd = new FormData();
    fd.append('page', id);
    fd.append('category', category);

    //alert(vdata);
    //alert(fd);
    vAjaxsNomen(fd);
}

function vAjaxsNomen(fd) {
    $.ajax({
        url: '/Nomen/AjaxNomenList/',
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (vdata) {
            SetNomenList(vdata);
        }
    });
}

function SetNomenList(vdata) {
    //alert(vdata);
    $('#AjaxNomenList').html(vdata);

}

