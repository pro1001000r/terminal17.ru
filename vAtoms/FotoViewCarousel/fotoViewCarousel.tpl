<div id="carouselVit" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        {$i=0}
        {foreach $listFoto as $item}
            <li data-target="#carouselVit" data-slide-to="{$i}" {if $i==0}class="active"{/if}></li>
                {$i = $i+1}    
            {/foreach}  
    </ol>
    <div class="carousel-inner">
        {$i=0}
        {foreach $listFoto as $item}
            {if $edit}
                <div class="carousel-item {if $i==0}active{/if}">
                    <div class="text-center">
                        {CREDFotoPanel table=$tablename id=$item.id}
                    </div>
                    <br>

                    <a href="{$item.foto64}">
                        <img class="d-block w-100" src={$item.foto} alt={$item.foto}>
                    </a>
                    {*<div class="carousel-caption">
                    {CREDFotoPanel table=$tablename id=$item.id}
                    <input type="text" name="name{$item.id}" id="name{$item.id}" value="{$item.id}" hidden="true">
                    </div>*}
                </div>
            {else} 
                <div class="carousel-item {if $i==0}active{/if}">
                    <a href="{$item.foto64}">
                        <img class="d-block w-100" src={$item.foto} alt={$item.foto}>
                    </a>
                </div>
            {/if}

            {$i = $i+1}
        {/foreach}
    </div>

    <a class="carousel-control-prev" href="#carouselVit" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselVit" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>

{if $edit}
    <input id="submitFoto" type="file" accept="image/*" name="file[]" multiple hidden="true">
    <input id="tablename" type="text" name="tablename" value="{$tablename}" hidden="true">
    <input id="tableid" type="text" name="tableid" value="{$tableid}" hidden="true">
{/if}

{*<style>
    .carousel-inner img {
        width: 100%
    }

    .carousel-item img {
        /*width: 320px;
        height: 240px !important*/
    }

    #myCarousel .carousel-indicators {
        position: static;
        margin-top: 0px
    }

    #myCarousel .carousel-indicators>li {
        width: 100px
    }

    #myCarousel .carousel-indicators li img {
        display: block;
        opacity: 0.5
    }

    #myCarousel .carousel-indicators li.active img {
        opacity: 1
    }

    #myCarousel .carousel-indicators li:hover img {
        opacity: 0.75
    }
</style>

<div class="container"> 
    <div class="row d-flex justify-content-center mt-5"> 
        <div class="col-md-6"> 
            <div id="myCarousel" class="carousel slide" data-ride="carousel" align="center"> 
                <div class="carousel-inner"> <div class="carousel-item active"> 
                        <img src="https://i.imgur.com/bV1xmG5.jpg" class="rounded"> 
                    </div> 
                    <div class="carousel-item"> 
                        <img src="https://i.imgur.com/vgMi4nw.jpg" class="rounded"> 
                    </div> 
                    <div class="carousel-item"> 
                        <img src="https://i.imgur.com/hRlGe10.jpg" class="rounded"> </div> 
                </div> 
                <ol class="carousel-indicators list-inline"> 
                    <li class="list-inline-item active"> 
                        <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel"> 
                            <img src="https://i.imgur.com/bV1xmG5.jpg" class="img-fluid rounded"> 
                        </a> 
                    </li> 
                    <li class="list-inline-item"> 
                        <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel"> 
                            <img src="https://i.imgur.com/vgMi4nw.jpg" class="img-fluid rounded"> 
                        </a> 
                    </li> 
                    <li class="list-inline-item"> 
                        <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel"> 
                            <img src="https://i.imgur.com/hRlGe10.jpg" class="img-fluid rounded"> 
                        </a> 
                    </li> 
                </ol> 
            </div> 
        </div> 
    </div>
</div>*}
