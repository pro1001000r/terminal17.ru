{header}
{navbar}

<div class="container-fluid">
    <div class = "row vit-background-opacity">
        <div class = "col-12">
            {*<h2 class='text-center'>{$tableNameUp} :</h2>*}

            <form id ="main" action="#" method="post" enctype="multipart/form-data">
                <div class="form-group form-inline">
                    {CREDPanel id=$item.id.value}
                </div>

                <div class = "form-group"> 
                    <label for="id" class="col-xs-2 col-form-label">id</label>
                    <input type="text" name="id" id="id" class="col-sm-10 form-control" value="{$item.id.value}" readonly>
                </div>
                <div class = "form-group">
                    <label for="name" class="col-xs-2 col-form-label">name</label>
                    <input id="name" type="text" name="name" id="name" class="form-control" placeholder="https://...ru" value="{$item.name.value}">
                </div>
                <div class = "form-group">
                    <label for="foto" class="col-xs-2 col-form-label">Foto</label>
                    <input id="foto" type="text" name="foto" id="foto" class="form-control" placeholder="https://...ru" value="{$item.foto.value}">
                </div>
                <div class="form-group">
                    <div class='row'> 
                        <div class='col-lg-6 offset-lg-3'>
                            {fotoViewCarousel table=$tableName id=$item.id.value edit=true}
                        </div>
                    </div>
                </div>
            </form> 
        </div>
    </div>
</div>

<script src="/components/bootstrap/js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="/template/js/VitCRED.js" type="text/javascript"></script>

{footer}