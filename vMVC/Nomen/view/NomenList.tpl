{header}
{navbar}

<script src="/vMVC/Nomen/js/vNomen.js" type="text/javascript"></script>
{* <script src="/template/js/VitOrder.js" type="text/javascript"></script> *}

<div class="container">
    <div class="row">
        <div class="col">
            <h2 id="categoryName" class='text-center'>Каталог товаров</h2>
            {if (!$userIsGuest)}
                <br>
                <div class="col">
                    {button name='Добавить номенклатуру' href = "/Nomen/Edit/" icon = 'bi-plus-circle-fill'}
                </div>
            {/if}
            <br>
            <button type="button" class="btn btn-primary ml-2" id="buttoncategory" data-toggle="collapse"
                data-target="#Vit-cattree-collapse" aria-expanded="false">
                <i class="bi bi-grid-3x2-gap-fill"></i>
                <b class="pb-3"></b> <i class="bi bi-chevron-down"></i>
            </button>

            <input type="text" id="cattreeid" name="cattreeid" value="" hidden="true">

            <div class="collapse" id="Vit-cattree-collapse" style="z-index: 100;">
                {cattree}
                <br>
            </div>
        </div>
    </div>

    <div class="row" id="AjaxNomenList">
        <div class="col">

            {pagenationNomen vp = $vpage}

            {$i=3}

            {foreach $list as $item}
                {if {$i==3}}<div class="row row-flex">{/if}

                    <div class="col-md-4 my-2">
                        {StrVit id = $item.id}
                    </div>

                    {$i=$i-1}
                    {if $i==0}
                </div>{$i=3}{/if}
            {/foreach}
            {if $i<>3}</div>{/if}
        <br>

        {pagenation vp = $vpage}

    </div>
</div>
</div>

{footer}