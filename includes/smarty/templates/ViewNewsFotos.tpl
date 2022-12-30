{include file='header.tpl'}

<div class="container">
    <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
            <h3>
                {$newsName}
            </h3>
            <img id="vit_image" src="{$newsGlavFoto}" class="img-responsive"
                 onclick="document.getElementById('my_image_button').click();" style="cursor: pointer">
            <br>
            <p id="my_text"></p>
            <br>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input id="my_image_button" type="file" class="form-control" name="foto"
                           onchange="readFile(this)" style="display: none"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-default" value="Записать" />
                </div>

            </form>
            <br>
            
            {include file="VitViewFoto.tpl"}
            
            <!-- comment 
            <div id="vit-slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="/images/1.jpg" alt="..." class="img-responsive img-thumbnail">
                        <div class="carousel-caption">
                            <h3>Первый слайд</h3>
                            <p>описание</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/images/2.jpg" alt="..." class="img-responsive img-thumbnail">
                        <div class="carousel-caption">
                            <h3>Второй слайд</h3>
                            <p>рисунок такой то</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/images/3.jpg" alt="..." class="img-responsive img-thumbnail">
                        <div class="carousel-caption">
                            <h3>Третий слайд</h3>
                            <p>рисунок такой то</p>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#vit-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#vit-slider" data-slide-to="1"></li>
                    <li data-target="#vit-slider" data-slide-to="2"></li>
                </ol>
                <a class="left carousel-control" href="#vit-slider" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#vit-slider" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>    
            </div>-->
        </div>    
    </div>

    <script src="/template/js/jquery-3.4.1.min.js" type="text/javascript"></script>

    <script src="/template/js/Vitjavascript.js" type="text/javascript"></script>
    <script src="/template/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>

