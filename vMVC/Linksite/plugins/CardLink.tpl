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