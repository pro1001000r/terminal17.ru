function ClearBase() {
        var fd = new FormData();
        fd.append('operation', "ClearBase");
        
        $.ajax({
            url: '/CRED/AjaxBase/',
            data: fd,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function (data) {
                alert('База очищена');
            }
        });
    }

