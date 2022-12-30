{pagenation vp = $vpage}
<div class="row">
    <div class="col">


        {foreach $list as $item}
            {if $user==$item.users_id}
                <div class="text-right">
                    <small>
                        от <b>{getname table = users id = $item.users_id}</b>
                        {dateformat d = $item.date}
                        для <b>{getname table = $item.fromtable id = $item.fromid}</b>
                    </small>
                    <div class="bubble-right bubble-in vShadow">
                        {$item.comment}
                    </div>
                </div>
            {else}
                <div class="text-left">
                    <small>
                        от <b>{getname table = users id = $item.users_id}</b>
                        {dateformat d = $item.date}
                        
                        для <b>{getname table = $item.fromtable id = $item.fromid}</b>
                    </small>
                    <div class="bubble-left bubble-in vShadow">
                        {$item.comment}
                    </div>
                </div>
            {/if}
            <br>
        {/foreach}


    </div>
</div>
<br>
{pagenation vp = $vpage}