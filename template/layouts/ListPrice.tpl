<div class="row">
    <div class="col">   


        {pagenation vp = $vpage}

        {$i=3}

        {foreach $listprice as $item}
            {if {$i==3}}<div class="row row-flex">{/if}
                <div class="col-md-4">
                    <div class="card vShadow">   
                        <div class="card-body">   

                            <a href="/nomen/Edit/{$item.id}" class = "vit-color-0">
                                {$item.name}
                            </a>
                            <br><br>
                            <div class="text-center">   
                                {fotoView foto = $item.foto}
                            </div>
                            <p>
                                <small>
                                    {$item.comment}
                                </small>
                            </p>

                            <br><br>
                            <div class="small text-right"> 
                                <b>{$item.price|vformat:"%d"} </b>
                                р./{$item.units}
                            </div>
                        </div>
                    </div>
                    <br> 
                </div> 

                {$i=$i-1}  
                {if $i==0}</div>{$i=3}{/if}
            {/foreach} 
            {if $i<>3}</div>{/if}
    <br>



    {pagenation vp = $vpage}
</div>
</div>