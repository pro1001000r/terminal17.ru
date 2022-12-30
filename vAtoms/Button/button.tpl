{if ($mode=="onclick")}
    <button type="button" class="btn vit-color-0 {$classbtn}" onclick="{$onclick}" {$freeParam}>
        <span class="{$class}" {if $comment<>''}data-toggle="popover" data-trigger="hover focus" data-container="body"
            data-placement="bottom" data-content="{$comment}" {/if}>
        </span>
        {if $name<>''}
            <br>
            {$name}
        {/if}
    </button>
{elseif ($mode=="submit")}
    <button name="submit" type="submit" class="btn vit-color-0 {$classbtn}" {$freeParam}>
        <span class="{$class}" {if $comment<>''} data-toggle="popover" data-trigger="hover focus" data-container="body"
            data-placement="bottom" data-content="{$comment}" {/if}>
        </span>
        {if $name<>''}
            <br>
            <small>{$name}</small>
        {/if}
    </button>

    {*<input type="submit" name="submit" class="btn vit-color-0" value="{$name}">*}
{elseif ($mode=="href")} {*Крупная кнопка с подсказками*}
    <a class="btn vit-color-0 {$classbtn}" {$freeParam} href="{$href}">
        <span class="{$class}" {if $comment<>''} data-toggle="popover" data-trigger="hover focus" data-container="body"
            data-placement="bottom" data-content="{$comment}" {/if}>
        </span>
        {if $name<>''}
            <br>
            <small>{$name}</small>
        {/if}
    </a>
{elseif ($mode=="new")} {*Крупная кнопка с подсказками*}
    <a class="btn vit-color-0 {$classbtn}" {$freeParam} href="{$href}">
        <span class="{$class}" {if $comment<>''} data-toggle="popover" data-trigger="hover focus" data-container="body"
            data-placement="bottom" data-content="{$comment}" {/if}>
        </span><span class="bi bi-plus-circle-fill h6" style="position: absolute; margin-left: -5px; margin-top:-5px"></span>
        {if $name<>''}
            <br>
            <small>{$name}</small>
        {/if}
    </a>

{/if}