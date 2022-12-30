{header}
{navbar}

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3 class="text-center">
                Кабинет администратора
            </h3>

            <p> Пользователь: {$user.name} <br>
                Статус доступа: 
                {if $user.status == 'S'}
                    Супервизор
                {elseif $user.status == 'A'}
                    Администратор    
                {elseif $user.status == 'U'}
                    Пользователь
                {/if}
            <p>
        </div>    
    </div> 

    <div class = "row">
        <div class="col-sm-8 col-sm-offset-2 padding-right">

            {button href = 'fotos' name = 'Фото' icon = 'bi-images'}
            {button name = 'Клиенты' href = 'clients'}
            {button name = 'Новости' href = 'News'}
            {button name = 'Категории' href = 'category'}
            {button name = 'Полезные сайты' href="Linksite" icon='bi-code-slash'}
            {button name = 'Новые Иконки' href = '/Icons/View/'}
            {button name = 'Баннеры' href = 'banner'}

            {if $user.status == 'S'}

                {button name = 'Отладка' href = '/Develop/View/' icon="icon-cogs"} <br><br>

            {/if}
        </div>
    </div>
    <div class = "row">
        
        {*listfoto*}
    </div>



</div>


{footer}