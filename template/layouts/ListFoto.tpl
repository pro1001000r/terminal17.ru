<!-- <div class = "container"> -->
<div class = "row text-left">
    <div class = "col">
        <a class="btn btn-info" href="/View/Foto/">
            <span class="glyphicon glyphicon-plus"></span> Добавить
        </a>
        <br>
    </div> 
</div>
{foreach $listFoto as $item} 
    <div class = "row">
        <div class = "col">
            <a  href="/View/Foto/{$item.id}">
                <img src={$item.name} class="img-responsive img-thumbnail">
            </a>
        </div>
        <div class = "col">
            <h3>
                {$item.name}
            </h3>
        </div> 
    </div>
    <br>            
{/foreach}
<!-- </div>comment -->