{header}
{navbar}

<div class="container-fluid">
    <div class = "row vit-background-opacity">
        <div class = "col">
            {*<h2 class='text-center'>{$tableNameUp} :</h2>*}

            <a class="btn btn-default" href="/{$tableName}/List/">
                <span class="glyphicon glyphicon-list"></span>
            </a>  
            {foreach $fields as $key}
                {if $key.type == 'f'}
                    <img src="{fotoPath foto = $key.value}" class="img-responsive img-thumbnail" style="width: 250px">
                {elseif $key.type == 'sid'}
                    <p>{$key.name}: {getname table=$key.table id=$key.value}</p>
                {else}
                    <p>{$key.name}: {$key.value}</p>
                    <br>
                    {if $key.name =='id'}
                        {$id = $key.value}
                    {/if}
                {/if}
            {/foreach} 
            </form> 
        </div>
           
    </div>
            {listtask id = $id} 
</div>     
{footer}