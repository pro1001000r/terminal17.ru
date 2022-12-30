<div class="col mx-2">   
    {pagenationNomen vp = $vpage}
    {$i=3}
    {foreach $list as $item}
        {if {$i==3}}<div class="row row-flex">{/if}

            <div class="col-md-4 my-2">
                {StrVit id = $item.id}
            </div> 

            {$i=$i-1}  
            {if $i==0}</div>{$i=3}{/if}
        {/foreach} 
        {if $i<>3}</div>{/if}
    <br>
    {pagenation vp = $vpage}
</div>
