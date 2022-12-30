{header}
{navbar}

<div class="container-fluid">
    <div class = "row vit-background-opacity">
        <div class = "col">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <a class="btn btn-default" href="/Vit/List/">
                        <span class="glyphicon glyphicon-list"></span>
                    </a>
                    {if ($id == 0)}
                        <button type="submit" name="submitNew" class="btn btn-default">
                            <span class="glyphicon glyphicon-floppy-disk"></span>
                        </button>
                    {else}
                        <button type="submit" name="submitEdit" class="btn btn-default">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </button>
                        <button type="submit" name="submitDelete" class="btn btn-default" onClick="return confirm('точно нужно удалить?')">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                    {/if}
                </div>
                <div class = "form-group form-inline">
                    <label for="id" class="col-xs-2 col-form-label">Номер</label>
                    <input type="id" name="id" class="form-control" value={$id} readonly>
                </div>
                <div class = "form-group">
                    <label for="name" class="col-xs-2 col-form-label">Наименование</label>
                    <input type="text" name="name" class="form-control" placeholder="Наименование" value="{$name}">
                </div>
                <div class = "form-group">
                    <label for="comment" class="col-xs-2 col-form-label">Описание</label>
                    <textarea name="comment" class="form-control" placeholder="Описание">
                        {$comment}
                    </textarea>
                </div>
                <div class = "form-group form-inline">
                    <label for="data" class="col-xs-2 col-form-label">Дата</label>
                    <input type="date" name="data" class="form-control" placeholder="Дата" value={$data}>
                </div>
                <div class = "form-group form-inline">
                    <label for="price" class="col-xs-2 col-form-label">Цена</label>
                    <input type="number" name="price" class="form-control" value={$price} data-decimals="2" step="0.1">
                </div>
                <div class = "form-group form-inline">
                    <label for="users_id" class="col-xs-2 col-form-label">Пользователь</label>
                    {select users = $users_id id = 'id'}
                </div>

                <div class="form-group">
                    <input id="my_image_button" type="file" class="form-control" name="foto"
                           onchange="readFile(this)" style="display: none" />
                </div>
                <img id="vit_image" src="{$fotoPath}" class="img-responsive img-thumbnail"
                     onclick="document.getElementById('my_image_button').click();" style="cursor: pointer">
                <br>

            </form> 

        </div>
    </div>
</div>     
{footer}