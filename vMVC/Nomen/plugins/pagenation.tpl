
<nav aria-label="Пагинация">

    <ul class="pagination justify-content-center vit-color-0">
        {if ($page > 2)}
            <li class="page-item">
                <button type="submit" class="page-link vit-color-0" onclick="vPagenation('1')">
                    <i class="bi bi-skip-backward-fill"></i>
                </button>
            </li>
            <li class="page-item"><a class="page-link vit-color-0 disabled">...</a></li>
            {/if}
            {for $i=1 to $total_pages}
                {if $i>=($page-1)  and  $i<=($page+2)}
                    {if $i==$page}
                    <li class="page-item"><a class="page-link vit-color-0 disabled"><b>{$i}</b></a></li>
                            {else}
                    <li class="page-item">
                        <button type="submit" class="page-link vit-color-0" onclick="vPagenation('{$i}')">
                            {$i}
                        </button>
                    </li>
                {/if}
            {/if}
        {/for}

        {if $page<($total_pages-2)} 
            <li class="page-item"><a class="page-link vit-color-0 disabled">...</a></li> 
            <li class="page-item">
                <button type="submit" class="page-link vit-color-0" onclick="vPagenation('{$total_pages}')">
                     <i class="bi bi-skip-forward-fill"></i>
                </button>
            </li> 
        {/if}
    </ul>

</nav>