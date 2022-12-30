{if $fotoCount > 1}
    <div id="vit-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            {assign var="act" value="active"}
            {foreach $fotoList as $fotoItem}
                <div class="item {$act}">
                    {assign var="act" value=""}            
                    <img src="{$fotoItem.path_foto}" alt="..." class="img-responsive img-thumbnail">
                    <div class="carousel-caption">
                        <!-- comment <h3>{$fotoItem.id}</h3> -->
                        <p>{$fotoItem.description}</p>
                    </div>
                </div>
            {/foreach}     
            <ol class="carousel-indicators">
                {assign var="fotoCount1" value="'$fotoCount - 1'"}            
                {for $foo = 0 to {$fotoCount - 1}}
                    {if $foo == 0}
                        {assign var="act" value="class='active'"}            
                    {else}
                        {assign var="act" value=''}            
                    {/if}
                    <li data-target="#vit-slider" data-slide-to="{$foo}" {$act}></li>
                    {/for}
            </ol>
            <a class="left carousel-control" href="#vit-slider" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#vit-slider" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>    
        </div>

    {else} 
        <img src="{$newsGlavFoto}" alt="..." class="img-responsive img-thumbnail">
    {/if}
