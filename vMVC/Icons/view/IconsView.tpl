{header}
{navbar}

<div class="container-fluid">
    <div class="row">

        <div class="col">
            <div class="h2 text-center">
                icon
            </div>
            <div class="row">
                {foreach $icons as $item}
                    <div class="  col-sm-6 col-lg-1 vit-color-0 vShadow text-center">
                        <small>
                            {$item.namesmall}
                        </small>
                        <br>
                        <button type="button" class="btn  vit-color-0">

                            {if $item.font == 'VitGlyphicon'}
                                <i class="glyphicon {$item.name} h2">
                                </i>
                        
                            {elseif ($item.font == 'bootstrap-icons')}
                                <i class="bi {$item.name} h2">
                                </i>
                            {else}
                                <i class="{$item.name} h2">
                                </i>
                            {/if}

                        </button>
                        <br>
                        {$item.name}
                        {* <br>
                        <small>
                            {$item.font}
                        </small> *}
                    </div>
                {/foreach}
            </div>
        </div>
    </div>


</div>

{footer}