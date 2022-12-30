<button type="button" class="btn vit-color-0 {$classbtn}" data-toggle="modal" data-target="#{$idModal}">
    <span class="{$class}" {if $comment<>''}data-toggle="popover" data-trigger="hover focus" data-container="body"
        data-placement="bottom" data-content="{$comment}" {/if}>
    </span>
    {if $name<>''}
        <small>
            <br>
            {$name}
        </small>
    {/if}
</button>

<div class="modal fade" id="{$idModal}" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered {$scroll}">
        <div class="modal-content">
            <div class="modal-header vit-color-0">
                <small>
                    <i class="{$class}">
                    </i>
                </small>
                {* <p class="pt-2">&nbsp; {$name}</p> *}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
{* {$data}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div> *}