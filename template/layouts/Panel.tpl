<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#vit-panel-collapse">
                ...
            </button>
        </div>

        <div class="collapse navbar-collapse" id="vit-panel-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <a  class="btn btn-default" onclick="history.back();">
                                <i class="glyphicon glyphicon-arrow-left"></i>
                                Назад
                            </a> 

                            <button type="submit" name="submitNew" class="btn btn-default">
                                <span class="glyphicon glyphicon-floppy-disk"></span> Записать
                            </button>

                            <button type="submit" name="submitEdit" class="btn btn-default">
                                <span class="glyphicon glyphicon-pencil"></span> Изменить
                            </button>
                            <button type="submit" name="submitDelete" class="btn btn-default">
                                <span class="glyphicon glyphicon-remove"></span> Удалить
                            </button>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Поиск">
                        </div>
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button> 
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
