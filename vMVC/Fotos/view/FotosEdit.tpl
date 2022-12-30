{header}
{navbar}

<script src="/components/bootstrap/js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="/template/js/Vitjavascript.js" type="text/javascript"></script>
{*<script src="/template/js/VitFoto.js" type="text/javascript"></script>*}

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
                    <label for="tablename" class="col-sm-2">имя таблицы: </label>
                    <input type="text" name="tablename"  class="col-sm-10 form-control" placeholder="" value="{$item.tablename.value}">
                </div> 
                <div class = "form-group row form-inline">
                    <label for="tableid" class="col-sm-2">идентификатор таблицы: </label>
                    <input type="text" name="tableid"  class="col-sm-10 form-control" placeholder="" value="{$item.tableid.value}">
                </div> 
                <div class = "form-group row form-inline">
                    <label for="comment" class="col-sm-2">описание: </label>
                    <textarea name="comment" class="col-sm-10 form-control" placeholder="Описание">{$item.comment.value}</textarea>
                </div>
                <div class = "form-group row form-inline">
                    <label for="vit_image" class="col-sm-2">картинка исходная: </label>
                    
                    <img id="vit_image" src="{fotoPath foto = $item.foto.value}" class="img-thumbnail img-fluid" style="width: 500px"
                         onclick="document.getElementById('my_image_button').click();" style="cursor: pointer">
                    
                    <input id="my_image_button" type="file" accept="image/*" class="col-sm-10 form-control" name="fotopath"
                           style="display: none" />
                </div>
                <div class = "form-group row form-inline">
                    <label for="vit_image_full" class="col-sm-2">картинка оригинал: </label>
                    
                    <img id="vit_image_full" src="{fotoPath foto = $item.foto64.value}" class="img-thumbnail img-fluid">
               
                </div>
            </form> 
        </div>
    </div>
</div>     
{footer}