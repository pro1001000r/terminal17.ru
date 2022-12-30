
<div class = "row">       
    <div class = "col">
        <br>
        <h2 class="text-center">Полезные ссылки:</h2>
        {if (!$userIsGuest)} 
            <a class="btn" href="/Linksite/Edit/">
                <span class="glyphicon glyphicon-plus"></span> Добавить
            </a>
        {/if}
        <br>
    </div> 
</div>

<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        {$sa = 0}
        {foreach $listLinkSite as $item}
            {if $item.image<>''}
                <li data-target="#carouselExampleCaptions" data-slide-to="{$sa}" 
                    {if $sa == 0}
                        class='active'
                    {/if}{$sa++}>
                </li>
                
            {/if}
        {/foreach}
    </ol>
    <div class="carousel-inner">
        {$sa1 = 1}
        {foreach $listLinkSite as $item}
            {if $item.image<>''}
                <div class="carousel-item {if $sa1 == 1}active{/if}">
                    {$sa1 = 0}
                    <a href="{$item.name}" target="_blank">
                        <img src="{fotoPath foto = $item.image}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{$item.name}</h5>
                        </div>
                    </a>
                </div>
            {/if}
        {/foreach}
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br>
{foreach $listLinkSite as $item} 
    <div class = "row">
        {*<div class = "col">
        <a  href="/ViewNews/{$item.id}">
        {$item.id} {$item.name}
        <img src={$item.name} class="img-responsive img-thumbnail">
        </a>
        </div>*}
        <div class = "col">
            <div class = "card">
                <div class = "card-text">
                    <div>
                        <a href="/Linksite/View/{$item.id}">
                            {if ($item.title=='')}  
                                {$item.name}  
                            {else}
                                {$item.title}
                            {/if}
                        </a>
                    </div>            
                    <p> 
                        {if ($item.image <> '')}  
                            <img src="{fotoPath foto = $item.image}" class="img-responsive img-thumbnail" style="width: 100px">
                        {/if}
                        {$item.description}
                    </p>
                </div>
                <div class = "card-footer text-right pb-0 pt-0">
                    {$item.data} <a class="btn btn-link" href="{$item.name}" target="_blank"> подробнее»</a>
                </div>
            </div>
        </div> 
    </div>
    <br>            
{/foreach}
