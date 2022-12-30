{header}
{navbar}

<div class="container">
    {* <div class="row">
        <div class="col-12 text-center">
            <form action="/find/view/" method="post">

                <div class="btn-group" role="group">
                    <input name="qFind1" id="qFind1" type="text" class="input-group-text bg-white vit-outline-0"
                        placeholder="Поиск..." value="" ohchange="$('#btnFind').click()">

                    {button onclick="FindClick()" icon="bi-search" classbtn='vit-outline-0'}
                    <button type="submit" id="btnFind" hidden="true"></button>
                </div>

            </form>
        </div>
    </div>
    <br> *}
    {if $findlist == []}
        <div class="row">
            <div class="col h2 text-center">
                Ничего не найдено
            </div>
        </div>
    {/if}
    {foreach $findlist as $item}
        <div class="row">
            <div class="col-10 offset-1">
                {if $item.tableName=='Nomen'}
                    {StrVit id=$item.id}
                {elseif $item.tableName=='Linksite'}
                    {* <div class="vit-color-0 h2">
                    <i class="bi bi-code-slash"></i>
                </div> *}
                    {CardLink id=$item.id}
                {else}
                    <div class="card vShadow">
                        <div class="card-body">
                            <div class="font-weight-bold">
                                {$item.name}
                            </div>
                        </div>
                        <div class="card-footer text-right pb-0 pt-0">
                            <a href="/{$item.tableName}/View/{$item.id}" class="vit-color-0">
                                <small>Подробнее »</small>
                            </a>
                        </div>
                    </div>
                {/if}
            </div>
        </div>
        <br>
    {/foreach}
</div>
{footer}