{header}
{navbar}

<script src="/vMVC/Linksite/js/vAjax.js" type="text/javascript"></script>
<script src="/template/js/VitVoice.js" type="text/javascript"></script>

<div class="container-fluid">
    <div class="row vit-background-opacity">
        <div class="col">
            <form action="#" method="post" id="main" enctype="multipart/form-data">
<br>
                <div class="row">
                    <div class="col mx-5 card vShadow">

                        <br>

                        {* Панель управления *}
                        <div class="form-group">

                            {CREDPanel id = $id}
                            <input type="text" name="id" id="id" value="{$id}" hidden="true">

                        </div>

                        {* Запись Описания через микрофон *}
                        <div class="text-center">
                            <button type="button" name="submit1" class="btn vit-color-0 vit-outline-0"
                                onclick="recognizeVit('comment')">
                                <span class="bi bi-mic-fill"></span>
                            </button>
                        </div>


                        {* Введение ссылки на сайт *}
                        {$style = "
                        color:green;
                        background-color:black;
                        "}

                        <div class="form-group">
                            <label for="name" class="col-xs-2 col-form-label">Ссылка на сайт</label>

                            <input id="linkname" type="text" name="name"
                                class="form-control vShadow" placeholder="https://...ru"
                                value="{$name}" onchange="getTDI()">

                            {button onclick="getTDI()" icon="bi-arrow-repeat" class="vit-color-0 vit-outline-0"}
                        </div>

                        <p class="small" id='sTitle'>
                        </p>
                        <p class="small" id='sDescription'>
                        </p>
                        <p class="small" id='sImage'>
                        </p>

                        <div class="form-group">
                            <label for="comment" class="col-xs-2 col-form-label">Описание</label>
                            <textarea id="comment" name="comment" class="form-control"
                                placeholder="Описание">{$comment}</textarea>
                        </div>
                        <div class="small" hidden="true">
                            <div class="form-group">
                                <label for="data" class="col-xs-2 col-form-label">Дата </label>
                                <input type="datetime-local" name="data" class="form-control" placeholder="Дата"
                                    value={$data}>
                            </div>

                            <div class="form-group">
                                <label for="users_id" class="col-xs-2 col-form-label">Пользователь</label>
                                {select table = 'users' value = $users_id id = 'id'}
                            </div>

                            <div class="form-group">
                                <label for="sitetitle" class="col-xs-2 col-form-label">sitetitle </label>
                                <textarea id="sitetitle" name="sitetitle" class="form-control"
                                    placeholder="Описание">{$sitetitle}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="sitedescription" class="col-xs-2 col-form-label">sitedescription </label>
                                <textarea id="sitedescription" name="sitedescription" class="form-control"
                                    placeholder="Описание">{$sitedescription}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="siteimage" class="col-xs-2 col-form-label">siteimage </label>
                                <textarea id="siteimage" name="siteimage" class="form-control"
                                    placeholder="Описание">{$siteimage}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{footer}