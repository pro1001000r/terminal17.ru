<select class="form-control form-control-sm" name="{$table_id}" id="{$table_id}" onchange="{$valstr}">
    <option value=0></option>
    {foreach $selectlist as $item1}
        <option value={$item1.id} {if ($item1.id == $selectid)} selected{/if}>
            {$item1.name} ({$item1.id})
        </option>
    {/foreach}
</select>