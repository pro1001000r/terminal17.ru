{header}
{navbar}

<div class="container-fluid">
    <div class = "row vit-background-opacity">
        <div class = "col-12">
            {*<h2 class='text-center'>{$tableNameUp} :</h2>*}

            <form id="main" action="#" method="post" enctype="multipart/form-data">
                <div class="form-group form-inline">
                    {CREDPanel id=$item.id.value}
                </div>
                {$comment = ''}
                {foreach from=$item key=$key item=$value}
                    <div class = "form-group row form-inline">
                        <label for="{$key}" class="col-sm-2">{$key}: </label>
                        {if $key == 'id'}
                            <input type="text" id="{$key}" name="{$key}" class="col-sm-10 form-control" value="{$value.value}" readonly>
                        {elseif $value.type == 'v256'}
                            <input type="text" name="{$key}"  class="col-sm-10 form-control" placeholder="{$key}" value="{$value.value}">
                        {elseif $value.type == 't'}
 
                            {$comment = $value.value}
                            <textarea name="comment" class="col-sm-10 form-control" placeholder="Описание">{$comment}</textarea>

                        {elseif $value.type == 'd'}
                            <input type="datetime-local" name="{$key}" class="col-sm-10 form-control" placeholder="Дата" value="{$value.value}">
                        {elseif $value.type == 'd152'}
                             <input type="number" name="{$key}" class="col-sm-10 form-control" value={$value.value} data-decimals="2" step="0.1">
                        {elseif $key == 'parent_id'}
                            {$table = $value.table}
                            {selecttree table = 'category' value = $value.value id = 'id'}
                        {elseif $value.type == 'sid'}
                            {$table = $value.table}
                            {select table = $value.table value = $value.value id = 'id'}
                        {elseif $value.type == 'f'}
                            {fotoViewCarousel table=$tableName id=$item.id.value edit=true}
                        {/if}
                     </div>
                {/foreach} 
            </form> 
        </div>
    </div>
</div>
            
<script src="/components/bootstrap/js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="/template/js/VitCRED.js" type="text/javascript"></script>

{footer}