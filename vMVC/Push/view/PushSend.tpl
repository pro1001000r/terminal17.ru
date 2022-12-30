{header}
{navbar}
{* <script src="/components/bootstrap/js/jquery-3.4.1.min.js" type="text/javascript"></script> *}
{* <script src="/template/js/VitVoice.js" type="text/javascript"></script> *}

<div class="container-fluid">
    <div class="row vit-background-opacity">
        <div class="col-10 offset-1 font-weight-lighter">
            <form action="#" method="post" id='FormPushSend' enctype="multipart/form-data">

                <div class="form-group row form-inline">
                    <label for="name1" class="col-sm-2">Заголовок: </label>
                    <input type="text" name="name" id="name1" class="col-sm-10 form-control" placeholder="Заголовок"
                        value="Заголовок">
                </div>
                <div class="form-group row form-inline">
                    <label for="name2" class="col-sm-2">Сообщение: </label>
                    <input type="text" name="name2" id="name2" class="col-sm-10 form-control" placeholder="Сообщение"
                        value="Сообщение">
                </div>

                <div class="form-group row form-inline">

                    <label for="users_id" class="col-sm-2">Клиент: </label>
                    {select table = 'users' value = '12' id = 'id'}
                </div>
                <div class="form-group row form-inline">

                    <label for="comment" class="col-sm-2">Описание: </label>
                    <textarea id="comment" name="comment" rows="7" cols="50" class="col-sm-10 form-control"
                        placeholder="Описание"></textarea>

                </div>

                <div class="form-group row form-inline">

                    <label for="users2_id" class="col-sm-2">Исполнитель: </label>
                    {select table = 'users' value = '12' id = 'id'}
                </div>
                <div class="form-group row form-inline">

                    <label for="data" class="col-sm-2">Дата: </label>
                    <input type="datetime-local" name="data" class="col-sm-10 form-control" placeholder="Дата" value="">
                </div>

                <div class="form-group row form-inline">

                    {button name="отправить" icon='bi-envelope-open-fill' onclick = 'PushSend()'}
                </div>
            </form>
        </div>
    </div>
</div>

{literal}
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-messaging.js"></script>
    <script src="/vMVC/Push/js/PushSend.js"></script>
{/literal}


{footer}