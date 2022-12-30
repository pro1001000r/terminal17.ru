<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        {$sa = 0}
        {foreach $listFoto as $item}
            <li data-target="#carouselExampleCaptions" data-slide-to="{$sa}" {if $sa == 0}class="active"{/if}>
                <img src="{fotoPath foto = $item.foto}" class="d-block img-fluid img-responsive" alt="{$item.name}">
            </li>

            {$sa=$sa+1}
        {/foreach}
    </ol>
    <div class="carousel-inner">
        {$sa = 1}
        {foreach $listFoto as $item}
            <div class="carousel-item {if $sa == 1}active{/if}">
                <a href="/Fotocategory/List/?category_id={$item.id}">
                    <img src="{fotoPath foto = $item.foto}" class="d-block img-fluid img-responsive" alt="{$item.name}">
                    <div class="carousel-caption d-block">
                        <div class = "btn btn-warning btn-sm">
                            {$item.name}
                        </div>
                    </div>
                </a>
            </div>
            {$sa = 0}
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


