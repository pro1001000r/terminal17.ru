
<div class="btn-group" role="group" aria-label="Basic example">

    <a type="button" href = "javascript:history.back()" class="btn vit-color-0 vit-outline-0">
        <span class="bi bi-reply-fill"></span>
    </a>
    <input type="text" name="tableName" id="tableName" value="{$tableName}" hidden="true">

    <a type="button" href="/{$tableName}/List/" class="btn vit-color-0 vit-outline-0">
        <span class="glyphicon glyphicon-th-list"></span>
    </a>
    {if ($id == 0)}
        <button type="submit" name="submitNew" class="btn vit-color-0 vit-outline-0" onclick="vNew()">
            <span class="glyphicon glyphicon-floppy-disk"></span>
        </button>
    {else}
        <button type="submit" name="submitEdit" class="btn vit-color-0 vit-outline-0" onclick="vEdit()">
            <span class="glyphicon glyphicon-floppy-disk"></span>
        </button>
        <button type="submit" name="submitDelete" class="btn vit-color-0 vit-outline-0" onclick="vDelete()">
            <span class="glyphicon glyphicon-remove"></span>
        </button>
    {/if}
</div>