{header}
{navbar}

<div class="container-fluid">
    <div class = "row vit-background-opacity">
        <div class = "col">

            {button name = '' href = 'javascript: history.back()' icon = 'bi-reply-fill'}

            {foreach $fields as $key}
                {if $key.type == 'f'}
                    {fotoView foto = $key.value}
                    <div class='row'> 
                        <div class='col-lg-6 offset-lg-3'>  
                        {fotoViewCarousel table='banner' id=$fields['id'].value}
                        </div>  
                    </div>
                    {*<img src="{fotoPath foto = $key.value}" class="img-responsive img-thumbnail" style="width: 250px">*}
                {elseif $key.type == 'sid'}
                    <p>{$key.name}: {getname table=$key.table id=$key.value}</p>
                {else}
                    <p>{$key.name}: {$key.value}</p>
                    <br>
                {/if}
            {/foreach} 
        </div>
    </div>
</div>     
{footer}