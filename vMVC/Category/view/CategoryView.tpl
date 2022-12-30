{header}
{navbar}

<div class="container-fluid">
    <div class="row vit-background-opacity">
        <div class="col offset-2">
            <a class="btn btn-default" href="/{$tableName}/List/">
                <span class="glyphicon glyphicon-list"></span>
            </a>
            <br>
            <p>Номер: {$id}</p>
            <br>
            <p>Наименование: {$name}</p>
            <br>
            <p>Описание: {$comment}</p>
            <br>
            <p>Фото: {$foto}</p>
            <br>
            <img id="vit_image" src="{fotoPath foto = $foto}" class="img-responsive img-thumbnail">
            <br>
        </div>
    </div>
</div>

{footer}