{header}
{navbar}

<script src="/components/bootstrap/js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="/template/js/Vitjavascript.js" type="text/javascript"></script>
<script src="/template/js/VitFoto.js" type="text/javascript"></script>

<div class="container-fluid">
    <div class = "row vit-background-opacity">
        <div class = "col-12">
            {*<h2 class='text-center'>{$tableNameUp} :</h2>*}

            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    {CREDPanel id = $item.id.value}
                </div>
                <div class = "form-group row form-inline">
                    <label for="id" class="col-sm-2">id: </label>

                    <input type="text" name="id" class="col-sm-10 form-control" value="{$item.id.value}" readonly>
                </div> 
                <div class = "form-group row form-inline">
                    <label for="name" class="col-sm-2">имя: </label>
                    <input type="text" name="name"  class="col-sm-10 form-control" placeholder="" value="{$item.name.value}">
                </div> 
                <div class = "form-group row form-inline">
                    <label for="comment" class="col-sm-2">описание: </label>
                    <textarea name="comment" class="col-sm-10 form-control" placeholder="Описание">{$item.comment.value}</textarea>
                </div> 
                <div class = "form-group row form-inline">
                    <label for="file" class="col-sm-2">выбор файла: </label>

                    <input id="file" type="file" accept="image/*" class="col-sm-10 form-control">
                </div> 
                <div class = "form-group row form-inline">
                    <label for="foto64" class="col-sm-2">картинка: </label>
                    
                    <script>
                        document.getElementById("file").addEventListener("change", function (event) {
                            compress(event);
                        });
                    </script>

                    <img id="foto64" name="foto64" src="{fotoPath foto = $item.foto64.value}" class="img-thumbnail img-fluid" style="width: 250px"
                         onclick="document.getElementById('file').click();" style="cursor: pointer">
                </div> 
                <div class = "form-group row form-inline">
                    <label for="vfile" class="col-sm-2">скрытая кнопка: </label>
                    <input id="vfile" type="file" class="col-sm-10 form-control" name="fotopath" />
                </div> 
                <div class = "form-group row form-inline">
                    <label for="vimage" class="col-sm-2">картинка исходная: </label>
                    <img id="vimage" src="{fotoPath foto = $item.foto.value}" class="img-thumbnail img-fluid" style="width: 250px"
                         onclick="document.getElementById('file').click();" style="cursor: pointer">
                </div> 
                <div class = "form-group row form-inline">
                    <label for="name2" class="col-sm-2">картинка в base64: </label>
                    <textarea name="name2" id="name2"></textarea>
                </div>
            </form> 
        </div>
    </div>
</div>     
{footer}