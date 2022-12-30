function compress(e) {
//    const width = 50;
//    const height = 30;
    const fileName = e.target.files[0].name;
    alert(fileName);
    const reader = new FileReader();

    reader.readAsDataURL(e.target.files[0]);
    reader.onload = event => {
        const img = new Image();

        img.src = event.target.result;
        img.onload = () => {
            const width = 640;
            var heightdr = img.height * width / img.width;
            const height = heightdr;
            const canvas = document.createElement('canvas');
            canvas.width = width;
            canvas.height = height;
            const ctx = canvas.getContext('2d');
            // img.width и img.height будет содержать оригинальные размеры
            ctx.drawImage(img, 0, 0, width, height);
            
            var fileout = canvas.toDataURL("image/png");
            $('#foto64').attr('src', fileout);
            $('#vimage').attr('src', fileout);
            $('#name2').val(fileout);
            
//            var link = document.createElement("a");
//            document.body.appendChild(link); // Firefox requires the link to be in the body :(
//            link.href = fileout;
//            link.download = "my-image-name.jpg";
//            link.click();
//            document.body.removeChild(link);
//
//            var dt = new DataTransfer();
//            dt.items.add("my-image-name.jpg");
//            var file_list = dt.files;
//            $('#file').files = file_list;


        };
        reader.onerror = error => console.log(error);
    };
    $('#vimage').attr('src', e.target.files[0]);
}

function VitSetImage(event, idSrc) {
    alert(event);
    event.onchange = function () {
        if ($(this).val() !== '') {
            if (document.getElementById(idSrc) != null) {
                var ev = document.getElementById(idSrc);
                const fileName = $(this)[0].files[0].name;
                var reader = new FileReader();
                //reader.readAsDataURL($(this)[0].files[0]);
                reader.onload = function (e) {
                    //alert(fileName);
                    const img = new Image();
                    img.src = event.target.result;

                    img.onload = () => {

                        const width = 10;
                        const height = event.target.height * width / event.target.width;
                        const elem = document.createElement('canvas');
                        elem.width = width;
                        elem.height = height;
                        const ctx = elem.getContext('2d');
                        // img.width и img.height будет содержать оригинальные размеры
                        ctx.drawImage(img, 0, 0, width, height);
                        ctx.canvas.toBlob((blob) => {
                            const file = new File([blob], fileName, {
                                type: 'image/jpeg',
                                lastModified: Date.now()
                            });
                        }, 'image/jpeg', 1);
                        //Главная строка!!!
                        ev.attr('src', elem.toDataURL("image/png"));
                    };
                };
                reader.readAsDataURL($(this)[0].files[0]);
            }
            ;
        }
        ;
    };
}


// Сжатие картинки
$("#vfile").change(function () {
    if ($(this).val() !== '') {

        const fileName = $(this)[0].files[0].name;
        var reader = new FileReader();
        reader.readAsDataURL($(this)[0].files[0]);
        reader.onload = function (event) {
            //alert(fileName);
            const img = new Image();
            img.src = event.target.result;

            img.onload = () => {

                const width = 640;
                const height = img.height * width / img.width;
                const elem = document.createElement('canvas');
                elem.width = width;
                elem.height = height;
                const ctx = elem.getContext('2d');
                // img.width и img.height будет содержать оригинальные размеры
                ctx.drawImage(img, 0, 0, width, height);
                var fileout = elem.toDataURL("image/png");
                $('#foto64').attr('src', fileout);
                $('#name2').val(fileout);
                $('#vimage').attr('src', e.target.result);
                //$('#vimage64').attr('src', elem.toDataURL("image/png", 0.1));
                
            };
        };
        //reader.readAsDataURL($(this)[0].files[0]);
    }
    ;
});

