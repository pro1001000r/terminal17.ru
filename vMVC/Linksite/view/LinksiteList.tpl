{header}
{navbar}
<section>
    <div class="container">
        <div class="row">
            <div class="col text-center vit-color-0 h4">
                <br>
                <i class='bi bi-code-slash'></i> Ссылки на сайты:
            </div>
        </div>
        <div class="row">
            <div class="col h5 vit-font-0">
                <p class='text-center'>
                    В данном разделе накопленны ссылки на интересные и полезные ресурсы сети
                </p>
            </div>
        </div>

        <div class="row">
            {if (!$userIsGuest)}
                <div class="col">
                    {button name='Добавить ссылку' href = "/Linksite/Edit/" icon = 'bi-plus-circle-fill'}
                </div>
            {/if}
            <div class="col">
                {find}
            </div>
        </div>
        <br>
        {pagenation vp = $vpage}

        {foreach $list as $item}
            <div class="row">
                <div class="col">
                    <div class='card vShadow'>
                        <div class="card-body">
                            {if $item.comment<>''}
                                <div class="h5">
                                    <i class='bi bi-text-left vShadowT'></i> {$item.comment}
                                </div>
                            {/if}
                            {if $item.sitetitle<>''}
                                <div class="h5">
                                    {* <a href="/Linksite/View/{$item.id}"> *}
                                    <a href={$item.name} target="_blank">
                                        <i class='bi bi-code-slash vShadowT'></i> {$item.sitetitle}
                                    </a>
                                </div>
                            {/if}
                            {if $item.siteimage<>''}
                                <a href={$item.name} target="_blank">
                                    <img src={$item.siteimage} class="img-responsive img-thumbnail"><br>
                                </a>
                            {/if}
                            {if $item.sitedescription<>''}
                                {$item.sitedescription}
                            {/if}
                        </div>

                        <div class="card-footer small">
                            Ссылка на сайт:<br>
                            <a href={$item.name} target="_blank" class="vit-color-0">{$item.name}</a>

                            <div class="text-right">

                                {if (!$userIsGuest)}
                                    {$src = $item.id}
                                    {button name='' href="/Linksite/Edit/$src" icon='bi-pencil-square'}
                                {/if}

                                <i class="bi bi-watch vit-color-0"></i>
                                {dateformat d = $item.data}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        {/foreach}

        {pagenation vp = $vpage}
    </div>
</section>


{footer}