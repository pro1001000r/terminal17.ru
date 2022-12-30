
{* {$description = $fields.comment.value} *}
{* {header title = $title description = $description} *}
{header title = $title}
{navbar}

<div class="container-fluid">
    <div class = "row vit-background-opacity">
        <div class = "col">

            {button name = '' href = 'javascript: history.back()' icon = 'bi-reply-fill'}

            {foreach $fields as $key}
                {if $key.type == 'f'}
                    {fotoViewCarousel table='nomen' id=$fields['id'].value}
                    {*<img src="{fotoPath foto = $key.value}" class="img-responsive img-thumbnail" style="width: 250px">*}
                {elseif $key.type == 'sid'}
                    <p>{$key.name}: {getname table=$key.table id=$key.value}</p>
                {else}
                    <p>{$key.name}: {$key.value}</p>
                    <br>
                {/if}
            {/foreach} 
            </form> 
        </div>
    </div>
</div> 

<script src="/components/bootstrap/js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="/template/js/VitCRED.js" type="text/javascript"></script>

{footer}