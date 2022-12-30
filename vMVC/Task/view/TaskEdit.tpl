{header}
{navbar}
<script src="/components/bootstrap/js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="/template/js/VitVoice.js" type="text/javascript"></script>

<div class="container-fluid">
    <div class="row vit-background-opacity">
        <div class="col-10 offset-1 font-weight-lighter">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group h2">

                    {CREDPanel id=$item.id.value}

                    <button type="button" name="submit1" class="btn vit-color-0 vit-outline-0"
                        onclick="recognizeVit('comment')">
                        <span class="bi bi-mic-fill"></span>
                    </button>

                    <button type="button" name="submit2" class="btn vit-color-0 vit-outline-0"
                        onclick="speak('comment')">
                        <span class="glyphicon glyphicon-volume-up"></span>
                    </button>


                </div>
                <input type="text" name="id" class="col-sm-10 form-control" value="{$item.id.value}"
                    style="display: none" readonly>

                <div class="form-group row form-inline">
                    <label for="name" class="col-sm-2">Наименование: </label>
                    <input type="text" name="name" class="col-sm-10 form-control" placeholder="Наименование"
                        value="{$item.name.value}">
                </div>
                <div class="form-group row form-inline">

                    <label for="users_id" class="col-sm-2">Клиент: </label>
                    {select table = 'clients' value = $item.clients_id.value id = 'id'}
                </div>
                <div class="form-group row form-inline">

                    <label for="comment" class="col-sm-2">Описание: </label>
                    <textarea id="comment" name="comment" rows="7" cols="50" class="col-sm-10 form-control"
                        placeholder="Описание">{$item.comment.value}</textarea>

                </div>

                <div class="form-group row form-inline">

                    <label for="users_id" class="col-sm-2">Исполнитель: </label>
                    {select table = 'users' value = $item.users_id.value id = 'id'}
                </div>
                <div class="form-group row form-inline">

                    <label for="data" class="col-sm-2">Дата начала: </label>
                    <input type="datetime-local" id="data" name="data" class="col-sm-10 form-control" placeholder="Дата"
                        value="{$item.data.value}">
                </div>
                <div class="form-group row form-inline">

                    <label for="dataend" class="col-sm-2">Дата окончания: </label>
                    <input type="datetime-local" id="dataend" name="dataend" class="col-sm-10 form-control"
                        placeholder="Введите дату по завершению" value="{$item.dataend.value}">
                </div>
                <div class="form-group row form-inline">

                    <label for="price" class="col-sm-2">Стоимость: </label>
                    <input type="number" name="price" id="price" class="col-sm-10 form-control" value={$item.price.value}
                        data-decimals="2" step="0.1">
                </div>
                <div class="form-group row form-inline">

                    <input id="my_image_button" type="file" class="col-sm-10 form-control" name="fotopath"
                        onchange="readFile(this)" style="display: none" />
                    <img id="vit_image" src="{fotoPath foto = $item.foto.value}" class="img-thumbnail img-fluid"
                        style="width: 250px" onclick="document.getElementById('my_image_button').click();"
                        style="cursor: pointer">
                </div>

            </form>

            {literal}
                <script type="text/javascript">
                    $('#dataend').change(function() {
                        //alert('1700');
                        var data = new Date($('#data').val());
                        //alert(data);
                        var dataend = new Date($('#dataend').val());
                        var sum = Math.round((dataend.getTime()-data.getTime())/60000 * 1700/60);
                        var price = $('#price').val();
                        if (price == 0){
                            //alert(sum);
                            $('#price').val(sum);
                        };
                    });
                    
                </script>
            {/literal}

        </div>
    </div>
</div>
{footer}